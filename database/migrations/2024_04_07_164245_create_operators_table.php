<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->string('industry')->nullable();
            $table->string('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('job')->nullable();
            $table->foreignId('company_id')->constrained('companies', 'id')->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
            // $table->primary(['id', 'email']);
        });
        // DB::statement("ALTER TABLE operators INHERIT users;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operators');
    }
};
