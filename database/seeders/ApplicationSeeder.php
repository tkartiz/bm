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
        DB::table('applications')->insert([
            [
                'client_id' => 1,
                'subject' => '看板1',
                'works_quantity' => 3,
                'severity' => '通常',
                'applicated_at' => date('2023-10-01'),
                'desired_dlvd_at' => date('2023-12-10'),
                'revision' => 0,
                'works1_id' => 1,
                'works2_id' => 2,
                'works3_id' => 3,
                'works4_id' => null,
                'works5_id' => null
            ],
            [
                'client_id' => 1,
                'subject' => '看板2',
                'works_quantity' => 5,
                'severity' => '通常',
                'applicated_at' => date('2023-10-01'),
                'desired_dlvd_at' => date('2023-12-25'),
                'revision' => 0,
                'works1_id' => 4,
                'works2_id' => 5,
                'works3_id' => 6,
                'works4_id' => 7,
                'works5_id' => 8
            ],
            [
                'client_id' => 1,
                'subject' => '看板3',
                'works_quantity' => 1,
                'severity' => '通常',
                'applicated_at' => date('2023-10-01'),
                'desired_dlvd_at' => date('2024-01-10'),
                'revision' => 0,
                'works1_id' => 9,
                'works2_id' => null,
                'works3_id' => null,
                'works4_id' => null,
                'works5_id' => null
            ],
        ]);
    }
}
