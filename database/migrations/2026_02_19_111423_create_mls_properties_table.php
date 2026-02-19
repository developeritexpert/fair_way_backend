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
        Schema::create('mls_properties', function (Blueprint $table) {
            $table->id();
            $table->string('listing_key')->unique();
            $table->string('listing_id');
            $table->string('originating_system');
            $table->string('mls_status')->nullable();
            $table->string('standard_status')->nullable();
            $table->boolean('mlg_can_view')->default(true);
            $table->timestampTz('modification_timestamp', 3);
            $table->decimal('list_price', 12, 2)->nullable();
            $table->decimal('original_list_price', 12, 2)->nullable();
            $table->decimal('previous_list_price', 12, 2)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms_full')->nullable();
            $table->integer('bathrooms_half')->nullable();
            $table->integer('bathrooms_total')->nullable();
            $table->integer('living_area')->nullable();
            $table->decimal('lot_size_sqft', 12, 2)->nullable();
            $table->integer('year_built')->nullable();
            $table->string('property_type')->nullable();
            $table->string('property_sub_type')->nullable();
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('street_suffix')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country', 8)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('list_agent_key')->nullable();
            $table->string('list_agent_name')->nullable();
            $table->string('list_office_key')->nullable();
            $table->string('list_office_name')->nullable();
            $table->jsonb('raw_json');
            $table->timestamps();
            $table->index(['originating_system']);
            $table->index(['modification_timestamp']);
            $table->index(['city', 'state']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mls_properties');
    }
};
