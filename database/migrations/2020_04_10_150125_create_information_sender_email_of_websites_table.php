<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationSenderEmailOfWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_sender_email_of_websites', function (Blueprint $table) {
            $table->id();
            $table->string('driver')->nullable();
            $table->string('host')->nullable();
            $table->string('port')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->string('encryption')->nullable();
            $table->string('no_reply')->nullable();
            $table->string('receiver_email')->nullable();
            $table->boolean('receive_status')->nullable();
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
        Schema::dropIfExists('information_sender_email_of_websites');
    }
}
