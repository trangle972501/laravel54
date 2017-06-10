<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_category', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('post_id')->unsigned();
            $table->integer('category_id')->unsigned();

             $table->foreign('post_id')->references('id')->on('posts')
                         ->onDelete('cascade')
                        ->onUpdate('cascade');

             $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::table('post_category', function(Blueprint $table)
        {
            $table->dropForeign('post_category_post_id_foreign');
            $table->dropForeign('post_category_category_id_foreign');
        });

        Schema::dropIfExists('post_category');
        
    }
}
