<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('bio')->nullable();
            $table->string('website_url')->nullable();
            $table->float('lat')->nullable();
            $table->float('long')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('banner_img')->nullable();
            $table->timestamps();
        });
    }

    /**->nullable()
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('cities');
    }
};
