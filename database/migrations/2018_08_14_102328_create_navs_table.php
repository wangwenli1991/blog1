<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('navs', function (Blueprint $table) {


            $table->engine='MyISAM';
            $table->increments('nav_id');
            $table->string('nav_name')->default('')->comment('//名称');
            $table->string('nav_title')->default('')->comment('//标题');
            $table->integer('nav_order')->default('0')->comment('//排序');
            $table->string('nav_alias')->default('0')->nullable($value=true)->comment('//别名');
            $table->string('nav_url')->comment('//链接地址');

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
        Schema::dropIfExists('navs');

    }
}
