<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('summer_concerts', function (Blueprint $table) {
            $table->id();
            $table->date('concert_date');
            $table->time('concert_time');
            $table->string('band_list');
            $table->string('location_name');
            $table->string('city');
            $table->string('concert_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('summer_concerts');
    }
};
