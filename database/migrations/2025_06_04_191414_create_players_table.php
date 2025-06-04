<?php

declare(strict_types=1);

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
        Schema::create('players', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('team')->nullable();
            $table->integer('number')->nullable();
            $table->json('positions')->nullable();
            $table->string('bats')->nullable();
            $table->string('throws')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
