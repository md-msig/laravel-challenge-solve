<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Group::class, 10)->create()->each(function($u) {
            $u->resources()->save(factory(App\Resource::class)->make());
        });
    }
}
