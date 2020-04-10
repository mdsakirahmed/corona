<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certificate')->nullable();
            $table->string('which_certificate')->nullable();
            $table->string('summary')->nullable();
            $table->string('award')->nullable();
            $table->string('signature1')->nullable();
            $table->string('signature2')->nullable();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('designation1')->nullable();
            $table->string('designation2')->nullable();
            $table->string('background_color')->nullable();
            $table->string('site_bar_color')->nullable();
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
        Schema::dropIfExists('certificates');
    }
}
