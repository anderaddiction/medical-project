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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('surname');
            $table->string('second_last_name')->nullable();
            $table->integer('age')->unsigned();
            $table->date('birthdate');
            $table->string('place_of_birth');
            $table->integer('marital_status');
            $table->integer('sex');
            $table->foreignId('document_type_id')->constrained('documents');
            $table->string('document_number')->unique();
            $table->string('ocupation');
            $table->foreignId('education_level_id')->constrained('educations')->nullable();
            $table->string('institution')->nullable();
            $table->string('affiliated_entity');
            $table->string('type_of_link');
            $table->text('address');
            $table->string('neighborhood')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('responsible')->nullable();
            $table->string('relationship')->nullable();
            $table->string('responsible_phone')->nullable();
            $table->string('companion')->nullable();
            $table->string('companion_phone')->nullable();
            $table->string('population')->nullable();
            $table->integer('armed_conflict_victim')->nullable();
            $table->integer('disability');
            $table->integer('which_disability')->nullable();
            $table->integer('ethnicity');
            $table->integer('which_ethnicity')->nullable();
            $table->integer('status');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('patients');
    }
};
