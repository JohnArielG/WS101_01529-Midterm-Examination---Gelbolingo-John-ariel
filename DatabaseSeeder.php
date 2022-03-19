<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        eloquent::unguard();
        $this->call('UserTableSeeder');
    }
}
