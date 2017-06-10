<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tag_post', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('tag_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')
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
        Schema::table('tag_post', function(Blueprint $table)
        {
            $table->dropForeign('tag_post_post_id_foreign');
            $table->dropForeign('tag_post_tag_id_foreign');
        });

        Schema::dropIfExists('tag_post');
    }
}
