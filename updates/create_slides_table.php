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
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimsog_slider_slides');
    }
}
