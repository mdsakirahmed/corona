<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonWebsiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_website_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status')->nullable();
            $table->string('database_name')->nullable();
            $table->string('database_user_name')->nullable();
            $table->string('database_user_password')->nullable();
            $table->string('name')->nullable();
            $table->string('domain')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('copy_right')->nullable();
            $table->string('background_color')->nullable();
            $table->string('support_bar_color')->nullable();
            $table->string('nav_bar_color')->nullable();
            $table->string('banner_color')->nullable();
            $table->string('footer_color')->nullable();
            $table->string('special_color')->nullable();
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
        Schema::dropIfExists('common_website_infos');
    }
}
