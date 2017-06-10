<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bookcars', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('name');
                $table->string('phone')->unique();
                $table->string('email')->unique();
                $table->integer('car_id')->unsigned();
                $table->integer('amount');
                $table->date('order_date');
                $table->date('return_date');
                $table->timestamps();

                $table->foreign('car_id')->references('id')->on('cars')
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
        Schema::table('bookcars', function( Blueprint $table)
        {
            $table->dropForeign('bookcars_car_id_foreign');
        });

        Schema::dropIfExists('bookscars');
    }
}
