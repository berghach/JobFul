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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->enum('post_type', ['job request', 'job offer', 'service request', 'service offer']);
            $table->string('title');
            $table->text('description');
            $table->string('industry');
            $table->string('function');
            $table->string('location');
            $table->jsonb('contracts');// multiple values
            $table->boolean('isValid')->default(false);
            $table->jsonb('sections')->nullable();// for post additional information
            $table->timestamps();
        });
        Schema::create('postable', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained('posts', 'id')->cascadeOnDelete();
            $table->morphs('postable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
