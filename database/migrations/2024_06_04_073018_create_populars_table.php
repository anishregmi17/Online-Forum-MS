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
        Schema::create('populars', function (Blueprint $table) {
            $table->id();
            $table->string('profileimage', 150);
            $table->string('username', 150);
            $table->string('title', 150);
            $table->string('description', 150);
            $table->string('image', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populars');
    }
};
