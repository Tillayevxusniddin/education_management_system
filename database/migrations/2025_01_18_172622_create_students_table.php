<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_birth');
            $table->string('unique_id')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('status', ['active', 'graduated', 'suspended', 'dropped_out'])->default('active');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
