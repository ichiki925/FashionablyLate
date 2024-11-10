<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category1' => '商品のお届けについて',
            'category2' => '商品の交換について',
            'category3' => '商品トラブル',
            'category4' => 'ショップへのお問い合わせ',
            'category5' => 'その他'
        ];
        DB::table('categories')->insert($param);
    }
}
