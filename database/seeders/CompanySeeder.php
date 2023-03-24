<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'katsucode',
            'postcode' => '6308303',
            'address1' => '奈良県',
            'address2' => '奈良市',
            'address3' => '南紀寺2丁目274番地3号萠黄アパート103号',
            'phone_number' => '090-9580-9257',
            'email' => 'info@katsucode.jp',
            'establish_date' => '2021-05-13',
            'website' => 'katsucode.jp',
            'created_at' => '2021/01/01 11:11:11'
        ]);
    }
}
