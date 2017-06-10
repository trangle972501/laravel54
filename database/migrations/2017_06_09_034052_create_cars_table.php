<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cars', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('brandcar_id')->unsigned();
            $table->integer('typecar_id')->unsigned();
            $table->string('image');
            $table->string('color');
            $table->text('description');
            $table->float('price');
            $table->integer('amount');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('brandcar_id')->references('id')->on('brandcars')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');

            $table->foreign('typecar_id')->references('id')->on('typecars')
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
        Schema::table('cars', function()
            {
                $table->dropForeign('cars_brandcar_id_foreign');
                $table->dropForeign('cars_typecar_id_foreign');
            });

        Schema::dropIfExists('cars');

    }
}
