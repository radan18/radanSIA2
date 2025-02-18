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
        Schema::create('contribution', function (Blueprint $table) {
            $table->id('contributionId');
            $table->unsignedBigInteger('payrollId');
            $table->unsignedBigInteger('employeeId');
            $table->string('govPrem');
            $table->decimal('contributionAmount', 8,2);
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
        Schema::dropIfExists('contribution');
    }
};
