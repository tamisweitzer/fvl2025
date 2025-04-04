<?php

use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('bio')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->foreignIdFor(City::class)->nullable();
            $table->foreignIdFor(State::class)->nullable();
            $table->string('zip')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('phone')->nullable();
            $table->string('website_url')->nullable();
            $table->float('lat')->nullable();
            $table->float('long')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('banner_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('venues');
    }
};
