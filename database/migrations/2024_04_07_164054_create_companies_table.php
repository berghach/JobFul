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
            $table->string('company_name');
            $table->string('industry');
            $table->string('bio');
            $table->string('company_headquarter');
            $table->jsonb('links')->nullable();
            $table->string('logo')->nullable();// path to logo image
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('companyables', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained('companies', 'id')->cascadeOnDelete();
            $table->morphs('companyable');
        });
        // DB::statement("ALTER TABLE companies INHERIT users;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('companyables');
    }
};
