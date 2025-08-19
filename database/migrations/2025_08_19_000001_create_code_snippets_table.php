<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('code_snippets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text')->nullable();
            $table->longText('code');
            $table->string('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('code_snippets');
    }
};
