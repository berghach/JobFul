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
            $table->boolean('isValid')->default(false);
            $table->enum('contract', ['Internship', 'CDD', 'CDI'])->nullable();
            $table->enum('job_type', ['Part Time', 'Full Time', 'Freelance', 'Remote', 'Hybrid', 'On site'])->nullable();
            $table->enum('study_level', ['Not important', 'Baccalaurate', 'Bac+2', 'Bac+3', 'Bac+4', 'Bac+5'])->nullable();
            $table->float('price')->nullable();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
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
