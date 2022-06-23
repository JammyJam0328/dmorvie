<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleanings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bill_boy_id');
            $table->foreignId('room_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('time');
            $table->string('time_start');
            $table->string('time_end');
            $table->string('time_duration');
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
        Schema::dropIfExists('cleanings');
    }
};
