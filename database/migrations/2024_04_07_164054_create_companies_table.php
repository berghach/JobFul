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
            $table->string('industry');
            $table->string('bio');
            $table->string('headquarter');
            $table->jsonb('links')->nullable();
            $table->string('logo')->nullable();// path to logo image
            $table->timestamps();
        });
        Schema::create('company_operators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies', 'id')->cascadeOnDelete();
            $table->foreignId('operator_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_operators');
    }
};
