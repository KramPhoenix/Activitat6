<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'function' => 'admin',
        ]);

        DB::table('roles')->insert([
            'function' => 'buyer',
        ]);

        DB::table('roles')->insert([
            'function' => 'seller',
        ]);
    }
}
