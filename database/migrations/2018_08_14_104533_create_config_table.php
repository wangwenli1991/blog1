<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('conf_id');
            $table->string('conf_title')->default('0')->comment('//排序');
            $table->string('conf_name')->default('0')->comment('//排序');
            $table->text('conf_content')->nullable($value=true)->comment('内容');
            $table->string('conf_order')->default('0')->comment('//排序');
            $table->string('conf_tips')->nullable($value=true)->default('0')->comment('//备注');
            $table->string('field_type')->default('0')->comment('//排序');
            $table->string('field_value')->nullable($value=true)->comment('//排序');
            $table->string('conf_radio')->nullable($value=true)->comment('内容');


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
        Schema::dropIfExists('config');
    }
}
