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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('specialty_id')->constrained('medical_specialties');
            $table->date('date');
            $table->string('start_hour');
            $table->string('end_hour');
            $table->integer('status')->default(1);
            $table->string('slug')->unique();
            $table->foreignId('responsible_id')->constrained('users');
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
