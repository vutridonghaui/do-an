<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
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
                'size_name'=>'S',
                'description'=>'Small',
                'status'=>1,
            ],
            [
                'size_name'=>'M',
                'description'=>'Medium',
                'status'=>1,
            ],
            [
                'size_name'=>'L',
                'description'=>'Large',
                'status'=>1,
            ],
            [
                'size_name'=>'XL',
                'description'=>'Extra Large',
                'status'=>1,
            ],
        ];
        \Illuminate\Support\Facades\DB::table('product_sizes')->insert($data);
    }
}
