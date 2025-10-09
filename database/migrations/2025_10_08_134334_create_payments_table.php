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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('enrollment_id')->nullable();
            $table->decimal('amount', 10, 2);
            $table->enum('payment_method',['cash','aba','acelida','wing','canadia'])->default('cash');
            $table->date('payment_date');
            $table->enum('status',['paid','pending','failed','refund'])->default('paid');
            $table->string('academic_year')->nullable();
            $table->string('term')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('enrollment_id')->references('id')->on('enrollment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

