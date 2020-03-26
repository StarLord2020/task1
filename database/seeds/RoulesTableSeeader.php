<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoulesTableSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roules')->insert(['name'=>'admin','creted_at'=>Date()]);
    }
}
