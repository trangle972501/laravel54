<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tickets', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('tour_id'); 
            $table->integer('amount');
            $table->timestamps();

        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
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

        Schema::table('tickets', function(Blueprint $table)
        {
            $table->dropForeign('tickets_tour_id_foreign');
        });

        Schema::drop('tickets');
    }
}
