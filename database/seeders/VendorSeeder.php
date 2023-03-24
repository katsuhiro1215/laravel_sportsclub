<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            [
                'username' => 'test1',
                'lastname' => '鈴木',
                'firstname' => '太郎',
                'lastname_kana' => 'スズキ',
                'firstname_kana' => 'タロウ',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'username' => 'test2',
                'lastname' => '佐藤',
                'firstname' => '次郎',
                'lastname_kana' => 'サトウ',
                'firstname_kana' => 'ジロウ',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'username' => 'test3',
                'lastname' => '山本',
                'firstname' => '和子',
                'lastname_kana' => 'ヤマモト',
                'firstname_kana' => 'カズコ',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'
            ],
        ]);
    }
}
