<?php

namespace Dimsog\Slider\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('dimsog_slider_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->unsignedInteger('parent_id')->default(0)->index();
            $table->unsignedInteger('position')->default(0)->index();
            $table->unsignedTinyInteger('active')->default(1)->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimsog_slider_categories');
    }
}
