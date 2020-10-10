<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayRoomSlotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_room_slot', function (Blueprint $table) {
            $table->id();
            $table->text('room');
            $table->boolean('room_type');
            $table->string('day');
            $table->string('slot');
            $table->time('start');
            $table->time('end');
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
        Schema::dropIfExists('day_slots');
    }
}
