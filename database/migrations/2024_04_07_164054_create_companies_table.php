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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->jsonb('links')->nullable();
            // $table->enum('role', ['admin', 'user', 'operator', 'freelancer', 'company', 'employee'])->default('company');
            $table->string('industry')->nullable();
            $table->string('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_headquarter')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE companies INHERIT users;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
