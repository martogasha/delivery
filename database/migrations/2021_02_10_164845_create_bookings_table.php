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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('weight')->nullable();
            $table->mediumText('picture')->nullable();
            $table->string('originLat');
            $table->string('originLng');
            $table->string('destinationLat');
            $table->string('destinationLng');
            $table->string('description');
            $table->string('type');
            $table->integer('status');
            $table->integer('distance');
            $table->integer('amount')->nullable();
            $table->integer('user_id');
            $table->integer('carrier_id')->nullable();
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
