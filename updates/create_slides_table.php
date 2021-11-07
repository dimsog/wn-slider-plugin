<?php

namespace Dimsog\Slider\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateSlidesTable extends Migration
{
    public function up()
    {
        Schema::create('dimsog_slider_slides', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('category_id');
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();
            $table->string('link', 2048)->nullable();
            $table->string('button_text')->nullable();
            $table->string('text', 4096)->nullable();
            $table->unsignedInteger('position')->default(0)->index();
            $table->unsignedTinyInteger('active')->default(1)->index();

            $table
                ->foreign('category_id')
                ->references('id')
                ->on('dimsog_slider_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimsog_slider_slides');
    }
}
