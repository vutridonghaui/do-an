<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
                'name'=>'Cong',
                'email'=>'cong@gmail.com',
                'password'=>bcrypt('123'),
                'phone'=>123456,
                'role_id'=>1,
                'status'=>1,
            ],
            [
                'name'=>'Jim',
                'email'=>'jimlam11gmail.com',
                'password'=>bcrypt('123'),
                'phone'=>123456,
                'role_id'=>1,
                'status'=>1,
            ],
        ];
        \Illuminate\Support\Facades\DB::table('users')->insert($data);
    }
}
