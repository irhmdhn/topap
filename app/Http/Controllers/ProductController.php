<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Events\TransactionEvent;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {
        $product = Product::get()->where('prd_slug', $slug)->first();
        $id = $product->prd_id;
        $items = ProductPrice::get()->where('prd_id', $id);
        if (!$product) {
            abort(404);
        } else {
            return view('pages/produk-detail', ['product' => $product, 'items' => $items, 'slug' => $slug]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {

        $productPrice = ProductPrice::get()->where('prd_prc_id', $request->item_id);
        $prd_id = Product::get()->where('prd_slug', $slug)->first()->prd_id;
        $validatePrd = Validator::make($request->all(), [
            'cust_gameid' => 'required|min:5',
            'cust_itemid' => 'required',
            'cust_method' => 'required',
            'cust_email' => 'required_without_all:cust_email,cust_notelp',
            'cust_notelp' => 'required_without_all:cust_email,cust_notelp',
        ]);
        if ($validatePrd->fails()) {
            return redirect()->back()->withErrors($validatePrd->errors())->withInput();
        }

        $tbCustomer = new Customer([
            'cust_email' => $request['cust_email'],
            'cust_phone' => $request['cust_notelp'],
            'cust_gameid' => $request['cust_gameid'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $tbCustomer->save();
        $tsCode = $this->uniqueCode();
        $tbTransaction = new Transaction([
            'ts_code' => $tsCode,
            'cust_id' => $tbCustomer->id,
            'prd_id' => $prd_id,
            'prd_prc_id' => $request['cust_itemid'],
            'ts_method' => $request['cust_method'],
            'created_at' => now(),
            'updated_at' => now()->addMinutes(1),
        ]);
        $tbTransaction->save();
        return Redirect::to('/transaction/' . $tsCode)->with('success', 'BERHASIL, silahkan lanjutkan transaksi');
    }

    private function uniqueCode()
    {
        $len = 12;
        $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rand = substr(str_shuffle(str_repeat($pool, 5)), 0, $len);
        $code = 'TA_' . $rand;
        $isCodeSet = Transaction::where('ts_code', $code)->count();
        if ($isCodeSet > 0) {
            $i = $isCodeSet;
            while ($isCodeSet > 0) {
                $newRand = substr(str_shuffle(str_repeat($pool, 5)), 0, $len);
                $newCode = 'TA_' . $newRand;
                $isCodeSet = Transaction::where('ts_code', $newRand)->count();
                $i++;
            }
            $code = $newCode;
        }
        return $code;
    }

    public function transaction($tsCode)
    {
        // $confirm = Transaction::where('ts_code', $tsCode);
        $confirm = Transaction::first()->confirm($tsCode);
        // dd($confirm);
        return view('pages/transaction-process', [
            'transaction' => $confirm,
        ]);
    }
    public function confirm(Request $request, $tsCode)
    {
        $validate = Validator::make($request->all(), [
            'ts_confirm' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $inputCode = $request['ts_confirm'];
        if ($inputCode == $tsCode) {
            Transaction::where('ts_code', $inputCode)->update([
                'ts_status' => 'Success',
                'updated_at' => now(),
            ]);
            return Redirect::to('/transaction/' . $inputCode . '/thankyou');
        }
    }
    public function thankyou()
    {
        return view('pages/thankyou');
    }
}
