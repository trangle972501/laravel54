<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('ticket_id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('ticket_id')->references('id')->on('tickets')
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
        Schema::tabel('orders', function(Blueprint $table)
        {
            $table->dropForeign('orders_ticket_id_foreign');
        });

        Schema::dropIfExists('orders');
    }
}
