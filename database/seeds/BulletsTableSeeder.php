<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BulletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bullet::class,10)->create();
    }
}
