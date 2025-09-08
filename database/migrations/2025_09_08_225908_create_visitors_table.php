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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->string('page_visited')->nullable();
            $table->string('referrer', 500)->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('device_type')->nullable(); // mobile, desktop, tablet
            $table->string('browser')->nullable();
            $table->string('operating_system')->nullable();
            $table->boolean('is_bot')->default(false);
            $table->string('session_id')->nullable();
            $table->integer('page_views')->default(1);
            $table->timestamp('first_visit')->nullable();
            $table->timestamp('last_activity')->nullable();
            $table->timestamps();
            
            // Indexes for better query performance
            $table->index('ip_address');
            $table->index('page_visited');
            $table->index('session_id');
            $table->index('created_at');
            $table->index('is_bot');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
