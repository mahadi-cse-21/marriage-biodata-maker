<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();

            // ======================
            // BASIC INFO
            // ======================
            $table->string('photo')->nullable();
            $table->string('pdf_path')->nullable();

            $table->string('full_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('birth_time')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('height')->nullable();

            $table->string('religion')->default('Islam');
            $table->string('blood_group')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('physical_status')->nullable();

            // ======================
            // EDUCATION
            // ======================
            $table->string('education')->nullable();
            $table->string('institution')->nullable();

            // ======================
            // PROFESSION
            // ======================
            $table->string('occupation')->nullable();
            $table->string('workplace')->nullable();
            $table->decimal('monthly_income', 12, 2)->nullable();

            // ======================
            // PERSONAL EXTRA
            // ======================
            $table->string('hobbies')->nullable();

            // ======================
            // FAMILY INFO
            // ======================
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();

            $table->integer('brothers')->nullable();
            $table->integer('married_brothers')->nullable();

            $table->integer('sisters')->nullable();
            $table->integer('married_sisters')->nullable();

            // ======================
            // CONTACT
            // ======================
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('address')->nullable(); // Keep for backward compatibility

            // ======================
            // PARTNER EXPECTATION
            // ======================
            $table->text('partner_expectation')->nullable();

            // ======================
            // DYNAMIC CUSTOM FIELDS
            // ======================
            $table->json('custom_fields')->nullable();

            // ======================
            // LANGUAGE PREFERENCE
            // ======================
            $table->string('language_preference')->default('bn');
            $table->enum('theme', ['dark-blue', 'golden-white'])->default('dark-blue');
       

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};