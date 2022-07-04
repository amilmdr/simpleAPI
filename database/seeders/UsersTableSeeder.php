<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'John Doe',
        //     'email' => 'john@doe.com',
        //     'password' => Hash::make('password')
        // ]);
        
        DB::table('users')->insert([
            'name' => 'Amil Doe',
            'email' => 'amil@doe.com',
            'password' => Hash::make('password')
        ]);
        //
    }
}