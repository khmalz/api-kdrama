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
        Schema::create('k_dramas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20);
            $table->string('slug');
            $table->string('year', 4);
            $table->string('type');
            $table->string('episodes');
            $table->json('genres');
            $table->date('release');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_dramas');
    }
};
