<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('content')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('feature_image')->nullable();
            $table->integer('cate_id');
            $table->string('author');
            $table->integer('created_by');
            $table->dateTime('publist_date')->nullable();
            $table->integer('view')->default(0);
            $table->string('slug')->unique();
            $table->index(['title','slug']);
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
