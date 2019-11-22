<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('regionId')->references('id')->on('regions');
            $table->foreign('sellerId')->references('id')->on('sellers');
            $table->foreign('postOfTypeId')->references('id')->on('post_of_types');
            $table->foreign('statusOfPostId')->references('id')->on('status_of_posts');
            $table->foreign('directionId')->references('id')->on('directions');
            $table->foreign('post_availability_status_id')->references('id')->on('post_availability_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
