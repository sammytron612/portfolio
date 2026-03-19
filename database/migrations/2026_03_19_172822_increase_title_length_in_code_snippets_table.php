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
        Schema::table('code_snippets', function (Blueprint $table) {
            $table->string('title', 3000)->change();
        });
    }

    public function down(): void
    {
        Schema::table('code_snippets', function (Blueprint $table) {
            $table->string('title', 255)->change();
        });
    }
};
