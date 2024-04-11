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
        Schema::create('roles', function (Blueprint $table) {// a role will be assign to users types models (employee, company, operator, ...)
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('rollable', function (Blueprint $table) {// the pivot table for roles and users models
            $table->foreignId('role_id')->constrained('roles', 'id')->cascadeOnDelete();
            $table->morphs('rollable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('rollable');
    }
};
