<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            [
                'vendor_id' => 1,
                'name' => 'club1',
                'email' => 'clab1@test.com',
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'vendor_id' => 2,
                'name' => 'club2',
                'email' => 'club2@test.com',
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'vendor_id' => 3,
                'name' => 'club3',
                'email' => 'club3@test.com',
                'created_at' => '2021/01/01 11:11:11'
            ],
        ]);
    }
}
