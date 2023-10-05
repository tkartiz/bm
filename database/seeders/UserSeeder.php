<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Aさん',
                'affiliation' => '営業',
                'email' => 'test@test.com',
                'phone' => '01234567891',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'Bさん',
                'affiliation' => '販売',
                'email' => 'demo@demo.com',
                'phone' => '024613578989',
                'password' => Hash::make('password123')
            ],
        ]);
    }
}
