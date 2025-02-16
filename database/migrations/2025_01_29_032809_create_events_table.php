<?php

use App\Models\Band;
use App\Models\Venue;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('admin_name');
            $table->foreignIdFor(Band::class);
            $table->foreignIdFor(Venue::class);
            $table->date('event_date');
            $table->time('event_time');
            $table->text('event_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('events');
    }
};
