<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert(
            [
                'client_id' => '1',
                'subject' => 'テスト',
                'works_quantity' => 1,
                'applicated_at' => '2023-10-01',
                'desired_dlvd_at' => '2023-12-20',
                'revision' => 0,
                'works1_id' => 1,
            ]
        );
    }
}
