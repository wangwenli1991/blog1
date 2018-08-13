<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Art extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('blog_art', function (Blueprint $table) {

            $table->engine='MyISAM';

            $table->text('art_title');
            $table->string('art_tag');
            $table->text('art_description');
            $table->text('art_thumb');
            $table->text('content');
            $table->timestamp('art_time');
            $table->text('art_editor');
            $table->tinyInteger('art_view');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_art');

    }
}
