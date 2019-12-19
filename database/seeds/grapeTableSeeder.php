<?php

use Illuminate\Database\Seeder;
use App\grape;
class grapeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\grape::class,50)->create();
    }
}
