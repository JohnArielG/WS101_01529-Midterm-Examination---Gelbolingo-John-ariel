<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use APP\User;
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
        'Name'  =>   'John',
        'Number ID'  => '1',
        'Passowrd'  => hash::make('password')
   ]);
}
