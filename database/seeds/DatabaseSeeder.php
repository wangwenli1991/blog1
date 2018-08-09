<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//         $this->call(UsersTableSeeder::class);
//        $this->call(ArticleSeeder::class);

        DB::table('admin')->insert([
//            'user_name' => str_random(10),
            'admin_name' => 'admin888',
            'email' => str_random(10).'@gmail.com',
            'admin_pass' => 'eyJpdiI6Imh1aUN2NnlSbWRqdUpiQWNTYVArWGc9PSIsInZhbHVlIjoibTY3S21oT096YThySXIyVW94T1lHUT09IiwibWFjIjoiY2RhMTU1OTU0NjlmZjdhMjI1ZjFiNDliNDcwZjg4ODdkZjA1ZjJhZjI3ZWFlMDg5NGFmYmU0NGFiZDU0ZTJjOCJ9
',
        ]);

        DB::table('category')->insert([
//            'user_name' => str_random(10),
            'cate_name' => '手表',
            'cate_title' => '手表',
            'cate_keywords' => '手表',
            'cate_description' => '手表',
            'cate_order' => '0',
            'cate_view' => '0',
            'cate_pid' => '0',
        ]);


//        DB::table('users')->insert([
//            'name' => str_random(10),
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);





    }
}
