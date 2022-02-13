<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'color_name'=>'Red',
                'status'=>1,
            ],
            [
                'color_name'=>'Yellow',
                'status'=>1,
            ],
            [
                'size_name'=>'White',
                'status'=>1,
            ],
            [
                'size_name'=>'Pink',
                'status'=>1,
            ],
            [
                'size_name'=>'Purple',
                'status'=>1,
            ],
            [
                'size_name'=>'Black',
                'status'=>1,
            ],
        ];
        \Illuminate\Support\Facades\DB::table('product_colors')->insert($data);
    }
}
