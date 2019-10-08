<?php

use Illuminate\Database\Seeder;
use Illuminate\Auth\EloquentUserProvider;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        Eloquent::unguard();
        $this->call(UsersTableSeeder::class);
    }
}
