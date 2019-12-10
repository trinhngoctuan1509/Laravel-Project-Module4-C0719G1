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
            $table->bigInteger('price');
            $table->string('imageFolderName')->nullable();
            $table->string('imagePost1')->nullable();
            $table->string('imagePost2')->nullable();
            $table->string('imagePost3')->nullable();
            $table->string('imagePost4')->nullable();
            $table->string('imagePost5')->nullable();
            $table->string('imagePost6')->nullable();
            $table->integer('post_availability_status_id')->default(2);
            $table->boolean('ableComposition')->default(false);
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
