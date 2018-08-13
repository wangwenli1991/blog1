<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->engine='MyISAM';


            $table->increments('cate_id');
            $table->string('cate_name');
            $table->string('cate_title');
            $table->string('cate_keywords');

            $table->string('cate_description',255)->comment("密码最长为60个字节");
            $table->string('cate_view')->default(0);
            $table->string('cate_order')->nullable($value=true);
            $table->string('cate_pid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('category');

    }
}
