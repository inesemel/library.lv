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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('publisher_id')->constrained()->cascadeOnDelete();
            $table->integer('pages');
            $table->integer('year');
            $table->string('genre', 255);
            $table->boolean('reprint')->default(false);
            $table->boolean('cased')->default(true);
            $table->text('desription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
