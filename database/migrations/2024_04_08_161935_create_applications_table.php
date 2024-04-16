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
        Schema::create('applications', function (Blueprint $table) { // an application belongs to one employee and one post 
            $table->id();
            $table->text('message');
            $table->jsonb('files');
            $table->jsonb('sections');
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('post_id')->constrained('posts', 'id')->cascadeOnDelete();
            $table->timestamps();
        });// but a post can have multiple applications so do an employee
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
