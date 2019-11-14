<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('userId');
            $table->string('title');
            $table->integer('categoryId');
            $table->integer('regionId');
            $table->integer('sellerId');
            $table->integer('postOfTypeId');
            $table->integer('statusOfPostId');
            $table->string('address');
            $table->integer('area');
            $table->integer('directionId');
            $table->string('contentPost');
            $table->integer('price');
            $table->string('imagePost1');
            $table->string('imagePost2');
            $table->string('imagePost3');
            $table->string('imagePost4');
            $table->string('imagePost5');
            $table->string('imagePost6');
            $table->boolean('ableComposition');
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
        Schema::dropIfExists('posts');
    }
}
