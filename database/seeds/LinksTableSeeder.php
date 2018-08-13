<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('links')->insert(        [
            'link_name'=>'手表回收网',
            'link_title'=>'二手名表回收',
            'link_url'=>'http://jinliscp.com',
            'link_order'=>1,
        ]);



    }
}
