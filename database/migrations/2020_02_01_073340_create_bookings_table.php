<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('booking_id');
            $table->string('travel_date');
            $table->dateTime('starting_datetime');
            $table->string('starting_point');
            $table->dateTime('ending_datetime');
            $table->string('ending_point');
            $table->string('included');
            $table->string('lead_traveller');
            $table->integer('adult_travellers');
            $table->integer('child_travellers');
            $table->float('package_fees');
            $table->float('total_cost');
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
        Schema::dropIfExists('bookings');
    }
}
