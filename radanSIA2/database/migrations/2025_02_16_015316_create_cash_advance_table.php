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
        Schema::create('cash_advance', function (Blueprint $table) {
            $table->id('cashAdId');
            $table->unsignedBigInteger('employeeId');
            $table->decimal('amount', 8,2);
            $table->integer('paymentPlan');
            $table->decimal('deductionPerPayroll', 8,2);
            $table->decimal('balance', 8,2);
            $table->dateTime('issueDate');
            $table->enum('status', ['unpaid', 'paid'])->default('paid');

            $table->foreign('employeeId')->references('employeeId')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_advance');
    }
};
