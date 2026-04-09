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
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('event_key')->nullable();
            $table->string('event_title');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 30);
            $table->string('profession');
            $table->string('organization')->nullable();
            $table->string('participation_mode')->default('Online');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registrations');
    }
};
