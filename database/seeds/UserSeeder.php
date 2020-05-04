<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
            'name' => 'Marc de Monserrat',
            'email' => 'marcdmn99@hotmail.com',
            'password' => Hash::make('marc1234'),
            'role' => 1,
            'created_at' => Carbon::now(),
        ]);
    }
}
