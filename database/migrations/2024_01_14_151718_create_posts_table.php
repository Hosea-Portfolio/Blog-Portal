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
            $table->id();
            $table->foreignId('category_id'); //foreign key untuk tabel category
            $table->foreignId('user_id'); //foreign key untuk tabel user
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('altimage')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('like_counter')->default(0);
            $table->tinyInteger('active')->default(1);
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
