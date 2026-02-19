<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mls_property_media', function (Blueprint $table) {
            $table->id();
            $table->string('listing_key');
            $table->string('media_key')->unique();
            $table->string('media_type')->nullable();
            $table->text('media_url');
            $table->integer('order_index')->default(0);
            $table->text('local_path')->nullable();
            $table->timestampTz('modification_timestamp', 3)->nullable();
            $table->timestamps();
            $table->index('listing_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mls_property_media');
    }
};
