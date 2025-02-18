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
        Schema::create('payslip', function (Blueprint $table) {
            $table->id('payslipId');
            $table->unsignedBigInteger('payrollId');
            $table->unsignedBigInteger('employeeId');
            $table->decimal('regularHours', 8,2);
            $table->decimal('overtTimeHours', 8,2);
            $table->decimal('grossSalary', 8,2);
            $table->decimal('overTimePay', 8,2);
            $table->decimal('basicPay', 8,2);
            $table->decimal('sssDeduction', 8,2);
            $table->decimal('philHealthDeduction', 8,2);
            $table->decimal('pagIbigDeduction', 8,2);
            $table->decimal('govDeductions', 8,2);
            $table->decimal('cashAdvanceDeduction', 8,2);
            $table->decimal('totalDeductions', 8,2);
            $table->decimal('netSalary', 8,2);
            $table->date('startDate');
            $table->date('endDate');
            $table->dateTime('createdAt', precision: 0);
            $table->dateTime('updatedAt', precision: 0);

            $table->foreign('payrollId')->references('payrollId')->on('payroll');
            $table->foreign('employeeId')->references('employeeId')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslip');
    }
};
