<?php

use Illuminate\Database\Seeder;
use App\Keeper;
class KeepersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Keeper::class,5)->create();
    }
}
