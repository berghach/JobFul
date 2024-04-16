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
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('bio')->nullable();
            $table->string('company_headquarter')->nullable();
            $table->jsonb('links')->nullable();
            $table->string('logo')->nullable();// path to logo image
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
