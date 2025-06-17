<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('temp_fairs', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->time('end_time');
            $table->string('event_name');
            $table->string('band_list');
            $table->string('location_name');
            $table->string('city');
            $table->string('event_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('temp_fairs');
    }
};
