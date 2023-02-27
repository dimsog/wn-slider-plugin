<?php

namespace Dimsog\Slider\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class AddCssClassToSlides extends Migration
{
    public function up()
    {
        Schema::table('dimsog_slider_slides', function (Blueprint $table) {
            $table->string('css_class')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasColumn('dimsog_slider_slides', 'css_class')) {
            Schema::table('dimsog_slider_slides', function (Blueprint $table) {
                $table->dropColumn('css_class');
            });
        }
    }
}
