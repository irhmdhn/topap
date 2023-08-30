<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Support\Facades\Validator;
use Error;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator as ValidationValidator;
use PhpParser\ErrorHandler\Collecting;

class AdminProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::first()->get();
        return view('admin/admin_product', [
            'title' => 'Data Game',
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = config('enums.prd_category');
        return view('admin/form/f_product', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $input = ['_token', 'prd_name', 'prd_dev', 'prd_category', 'prd_desc', 'prd_img', 'prd_item_name', 'prd_item_img', 'tot_prc'];
        // PRODUCT ADD
        $products = $request->collect($input);
        // Validate 
        $validatePrd = Validator::make($request->all(), [
            'prd_name' => 'required|min:1',
            'prd_dev' => 'required|min:1',
            'prd_category' => 'required|in:Game,Pulsa,Voucher,Joki',
            'prd_desc' => 'required|min:5',
            'prd_img' => ['required', 'mimes:jpg,png,jpeg,webp'],
            'prd_item_name' => 'required|min:1',
            'prd_item_img' => ['required', 'mimes:jpg,png,jpeg,webp'],
        ]);
        if ($validatePrd->fails()) {
            return redirect()->back()->withErrors($validatePrd->errors())->withInput();
        }
        $tbProduct = new Product([
            'prd_name' => $products['prd_name'],
            'prd_slug' => $this->createUniqueSlug($products['prd_name']),
            'prd_dev' => $products['prd_dev'],
            'prd_desc' => $products['prd_desc'],
            'prd_category' => $products['prd_category'],
            'prd_img' => $request->file(['prd_img'])->store('product_img'),
            'prd_item_img' => $request->file(['prd_item_img'])->store('product_img_item'),
            'prd_item_name' => $products['prd_item_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $tbProduct->save();
        // ITEMS ADD
        $items = $request->except($input);
        $len = (int)$request['tot_prc'];
        for ($i = 0; $i < $len; $i++) {
            $prdItems = new ProductPrice;
            $prdItems->prd_id = $tbProduct->id;
            $prdItems->prd_prc_vol = $items['prd_prc_vol'][$i];
            $prdItems->prd_prc = $items['prd_prc'][$i];
            $prdItems->created_at = now();
            $prdItems->updated_at = now();
            $prdItems->save();
        }
        //redirect to index
        return Redirect::route('product.index')
            ->with('success', 'Data produk dan item BERHASIL ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $product = Product::get()->where('prd_slug', $slug)->first();
        $category = config('enums.category');
        $id = $product->prd_id;
        $productItems = ProductPrice::get()->where('prd_id', $id);
        return view('admin/admin_product-detail', [
            'product' => $product,
            'product_items' => $productItems,
            'category' => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
        $category = config('enums.prd_category');

        $product = Product::get()->where('prd_slug', $slug)->first();
        $id = $product->prd_id;
        $productItems = ProductPrice::get()->where('prd_id', $id);
        return view('admin/form/f_product', [
            'product' => $product,
            'product_items' => $productItems,
            'category' => $category,
            'slug' => $slug,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $slug)
    {
        $input = ['_token', 'prd_name', 'prd_dev', 'prd_category', 'prd_desc', 'prd_img', 'prd_item_name', 'prd_item_img', 'tot_prc'];

        $product = Product::get()->where('prd_slug', $slug)->first();
        $id = $product->prd_id;

        // Jika ada file di upload
        if ($request->hasFile('prd_img')) {
            $request->file(['prd_img'])->store('product_img');
            Storage::delete($product->prd_img);
        }
        if ($request->hasFile('prd_item_img')) {
            $request->file(['prd_item_img'])->store('product_img_item');
            Storage::delete($product->prd_item_img);
        }

        Product::where('prd_slug', $slug)->update([
            'prd_name' => $request->prd_name,
            // 'prd_slug' => $this->createUniqueSlug($request->prd_name),
            'prd_dev' => $request->prd_dev,
            'prd_status' => $request->prd_status,
            'prd_desc' => $request->prd_desc,
            'prd_category' => $request->prd_category,
            'prd_item_name' => $request->prd_item_name,
        ]);
        $prdItemsLen = ProductPrice::get()->where('prd_id', $id)->count();
        $len = (int)$request['tot_prc'];
        $items = $request->except($input);
        for ($i = 0; $i < $len; $i++) {
            ProductPrice::where('prd_prc_id', $items['prd_prc_id'][$i])->update([
                'prd_prc_vol' => $items['prd_prc_vol'][$i],
                'prd_prc' => $items['prd_prc'][$i],
                'updated_at' => now(),
            ]);
        }
        if ($len > $prdItemsLen) {
            for ($i = $prdItemsLen; $i < $len; $i++) {
                $prdItems = new ProductPrice;
                $prdItems->prd_id = $id;
                $prdItems->prd_prc_vol = $items['prd_prc_vol'][$i];
                $prdItems->prd_prc = $items['prd_prc'][$i];
                $prdItems->created_at = now();
                $prdItems->updated_at = now();
                $prdItems->save();
            }
        }

        //redirect to index
        return Redirect::route('product.show', $product->prd_slug)
            ->with('success', 'Data produk BERHASIL diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($slug)
    {
        $product = Product::get()->where('prd_slug', $slug)->first();

        //delete image Storage
        Storage::delete($product->prd_img);
        Storage::delete($product->prd_item_img);

        //delete product
        Product::where('prd_slug', $slug)->delete();

        //redirect to index
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    // JIKA SLUG DUPLIKAT
    private function createUniqueSlug($string)
    {
        $slug = Str::slug($string);
        $count = Product::where('prd_slug', $slug)->count();

        if ($count > 0) {
            $i = 2;
            while ($count > 0) {
                $newSlug = $slug . '-' . $i;
                $count = Product::where('prd_slug', $newSlug)->count();
                $i++;
            }
            $slug = $newSlug;
        }

        return $slug;
    }
}
