<?php

use Illuminate\Database\Seeder;
use App\Resource;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Group::class, 10)->create();
    }
}
