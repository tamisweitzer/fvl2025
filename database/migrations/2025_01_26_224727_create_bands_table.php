<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('bio')->nullable();
            $table->foreignIdFor(\App\Models\City::class)->nullable();
            $table->foreignIdFor(\App\Models\State::class)->nullable();
            $table->string('website_url')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('banner_img')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bands');
    }
};
