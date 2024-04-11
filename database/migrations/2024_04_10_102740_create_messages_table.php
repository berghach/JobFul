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
        Schema::create('conversations', function (Blueprint $table){
            $table->id();
            $table->string('side_1');
            $table->string('side_2');
            $table->foreign('side_1')->references('email')->on('users')->cascadeOnDelete();
            $table->foreign('side_2')->references('email')->on('users')->cascadeOnDelete();
        });
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation')->constrained('conversations', 'id')->cascadeOnDelete();
            $table->morphs('messageable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations');
        Schema::dropIfExists('messages');
    }
};
