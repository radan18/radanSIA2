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
        Schema::create('payroll', function (Blueprint $table) {
            $table->id('payrollId');
            $table->date('startDate');
            $table->date('endDate');
            $table->decimal('totalAmount', 8, 2);
            $table->dateTime('createdAt', precision: 0);
            $table->dateTime('updatedAt', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll');
    }
};
