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
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('email')->unique()->primary(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->jsonb('links')->nullable();
            // $table->enum('role', ['admin', 'user', 'operator', 'freelancer', 'company', 'employee'])->default('employee');
            $table->string('industry')->nullable();
            $table->string('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('job')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->primary(['id', 'email']);
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
