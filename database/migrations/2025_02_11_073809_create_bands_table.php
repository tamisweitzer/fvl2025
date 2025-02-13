<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\City;
use \App\Models\State;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('common_name');
            $table->string('proper_name');
            $table->text('tagline');
            $table->text('bio');
            $table->foreignKeyFor(City::class);
            $table->foreignKeyfor(State::class);
            $table->string('website_url');
            $table->string('thumbnail_img');
            $table->string('banner_img');
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bands');
    }
};
