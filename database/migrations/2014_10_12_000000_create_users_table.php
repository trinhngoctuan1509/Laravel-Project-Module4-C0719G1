<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phoneNumber');
            $table->string('tokenVerifymail');
            $table->integer('VerifymailId')->default(1);
            $table->integer('statusOfUserId');
            $table->integer('levelOfUserId');
            $table->string('imageAvatarOfUser')->nullable();
            $table->string('password');
            $table->string('reasonLocked')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
