<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'prd_name'      => 'PUBG Mobile',
            'prd_slug'      => 'pubg-mobile',
            'prd_dev'       => 'Tencent Games',
            'prd_desc'      => 'PUBG Mobile adalah game mobile yang memiliki 100 pemain berparasut ke pulau terpencil sejauh 8x8 km untuk pertarungan battle royal. Pemain harus menemukan dan mencari senjata, kendaraan, dan persediaan mereka sendiri, dan mengalahkan setiap pemain di medan pertempuran yang apik secara grafis dan taktik yang memaksa pemain ke zona bermain yang menyusut. Bersiaplah untuk mendarat, menjarah, dan melakukan apa pun untuk bertahan dan menjadi orang terakhir yang bertahan!',
            'prd_category'  => 'Game',
            'prd_img'       => 'product_img/B1vFBlHbaMEu8NJdxXuUajbr6ckNlJ2jNcZZFuXV.webp',
            'prd_item_img'  => 'product_img_item/TCT7OBvUTejjuAqsOJTBMTXSfTiELoWNM1B7NdXQ.webp',
            'prd_item_name' => 'UC',
            'prd_status'    => 'Active',
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
        $product->save();
        $item = new ProductPrice([
            'prd_id'        => $product->id,
            'prd_prc_vol'   => 16,
            'prd_prc'       => 5000,
            'created_at'    => now(),
            'updated_at'    => now(),

        ]);
        $item->save();
    }
}
