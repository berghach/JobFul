<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->string('industry')->nullable();
            $table->string('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('job')->nullable();
            $table->enum('talent_type', ['freelancer', 'job seeker']);
            $table->rememberToken();
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE employees INHERIT users;");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empolyees');
    }
};
