<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('temp_day_concerts', function (Blueprint $table) {
            $table->id();
            $table->date('concert_date');
            $table->time('concert_time');
            $table->string('band');
            $table->string('venue');
            $table->string('city');
            $table->string('concert_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('temp_day_concerts');
    }
};
