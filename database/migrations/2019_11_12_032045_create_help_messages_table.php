<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_messages', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('fullName');
            $table->string('reason');
            $table->string('sendOfDate');
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
        Schema::dropIfExists('help_messages');
    }
}
