<?php

use Illuminate\Database\Seeder;

class OrderClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(\App\Order::class, 10)->create();
    }
}
