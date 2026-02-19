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
        Schema::create('mls_replication_states', function (Blueprint $table) {
            $table->id();
            $table->string('resource');
            $table->string('originating_system');
            $table->timestampTz('last_modification_timestamp', 3);
            $table->timestamps();
            $table->unique(['resource', 'originating_system']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mls_replication_states');
    }
};
