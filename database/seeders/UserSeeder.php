<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
            'username' => 'AdminUser',
            'name' => 'John Hall',
            'email' => 'johnhall@gmail.com',
            'password' => '$2y$10$nSK.Qff1ufK7WrtMCU91hO6aaYzwlYddFHsiTRLnEuf4XaI8OUYCy',
        ]);
        DB::table('users')->insert([
            'username' => 'Robin',
            'name' => 'Robin Schmidt',
            'email' => 'robinschmidt@gmail.com',
            'password' => '$2y$10$nSK.Qff1ufK7WrtMCU91hO6aaYzwlYddFHsiTRLnEuf4XaI8OUYCy',
        ]);
        DB::table('users')->insert([
            'username' => 'Sally',
            'name' => 'Sally Murphy',
            'email' => 'Sallymurphy@hotmail.com',
            'password' => '$2y$10$nSK.Qff1ufK7WrtMCU91hO6aaYzwlYddFHsiTRLnEuf4XaI8OUYCy',
        ]);
        DB::table('users')->insert([
            'username' => 'AdminUser',
            'name' => 'Test Robert',
            'email' => 'admin.user@gmail.com',
            'password' => '$2y$10$nSK.Qff1ufK7WrtMCU91hO6aaYzwlYddFHsiTRLnEuf4XaI8OUYCy',
        ]);
    }
}
