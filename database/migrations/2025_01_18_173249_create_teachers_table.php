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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('salary', 10, 2);
            $table->string('academic_status');
            $table->text('certifications')->nullable();
            $table->text('research_interests')->nullable();
            $table->date('joining_date');
            $table->string('working_hours')->nullable();
            $table->enum('status', ['working', 'resigned', 'on_leave', 'retired', 'terminated'])->default('working');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
