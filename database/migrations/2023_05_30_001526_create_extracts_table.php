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
        Schema::create('extracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->int('value');
            $table->DateTime('date');
            $table->string('prove');
            $table->is_bool('recurring');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extracts');
    }
};
