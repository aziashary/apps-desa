<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'username'=>'admindesa',
            'email'=>'queensi.net@gmail.com',
            'password'=>Hash::make('12345678'),
            'level'=>1,
        ]);
    }
}