<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('content');
            $table->text('description');
            $table->string('image');
            $table->boolean('active');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::table('posts', function(Blueprint $table)
        {
            $table->dropForeign('posts_user_id_foreign');
        });
        Schema::dropIfExists('posts');


    }
}
