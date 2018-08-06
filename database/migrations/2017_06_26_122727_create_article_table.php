<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article',function(Blueprint $table){
        $table->increments('art_id');
        $table->string('art_title');
        $table->text('art_tag');
        $table->integer('art_description');
        $table->integer('art_thumb');
        $table->integer('art_content');
        $table->integer('art_time');
        $table->integer('art_editor');
        $table->integer('art_view');
        $table->integer('cate_id');

        $table->timestamps();            
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');

    }
}
