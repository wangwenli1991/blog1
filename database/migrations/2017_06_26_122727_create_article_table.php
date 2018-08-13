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

            $table->engine='MyISAM';

            $table->increments('art_id');
            $table->string('art_title')->comment('标题');
            $table->string('art_tag')->nullable($value=true)->comment('关键词');
            $table->string('art_description')->comment('描述')->nullable($value=true);
            $table->string('art_thumb')->comment('图片')->nullable($value=true);
            $table->text('art_content')->comment('内容');
            $table->string('art_time')->comment('添加时间')->nullable($value=true);
            $table->string('art_editor')->comment('作者')->nullable($value=true);
            $table->unsignedInteger('art_view')->comment('查看次数')->default(0);
            $table->unsignedInteger('cate_id')->default(0)->comment('目录名称');
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
