<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => 'Joana',
            'username' => 'js2',
            'password' => Hash::make('Dj123123'),
            'telp' => '83928395679',
            'role' => 'petugas',
        ]);
    }
}
