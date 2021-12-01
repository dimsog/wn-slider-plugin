<?php

namespace Dimsog\Slider\Updates;

use Illuminate\Support\Facades\DB;
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
            $table->unsignedInteger('parent_id')->nullable()->default(null)->index();
            $table->unsignedInteger('nest_left')->nullable()->default(null)->index();
            $table->unsignedInteger('nest_right')->nullable()->default(null)->index();
            $table->unsignedInteger('nest_depth')->nullable()->default(null)->index();
            $table->unsignedInteger('position')->default(0)->index();
            $table->unsignedTinyInteger('active')->default(1)->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimsog_slider_categories');
    }
}
