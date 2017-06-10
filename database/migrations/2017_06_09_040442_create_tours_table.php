<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tours', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('title');
            $table->text('content');
            $table->text('description');
            $table->float('price');
            $table->integer('typetour_id')->unsigned();
            $table->integer('arrive_destination_id')->unsigned();
            $table->integer('depart_destination_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->foreign('typetour_id')->references('id')->on('typetours')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');

            $table->foreign('arrive_destination_id')->references('id')->on('destinations')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');

            $table->foreign('depart_destination_id')->references('id')->on('destinations')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidz
     */
    public function down()
    {
        //
        Schema::table('tours', function(Blueprint $table)
        {
            $table->dropForeign('tours_typetour_id_foreign');
            $table->dropForeign('tours_arrive_destination_id_foreign');
            $table->dropForeign('tours_depart_destination_id_foreign');
        });

        Schema::drop('tours');
    }
}
