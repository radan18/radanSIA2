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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendanceId');
            $table->unsignedBigInteger('employeeId');
            $table->date('attendanceDate');
            $table->dateTime('checkInTime');
            $table->string('checkInStatus');
            $table->dateTime('checkOutTime');
            $table->string('checkOutStatus');
            $table->enum('status', ['checkedIn', 'checkedOut', 'manual'])->default('manual');
            $table->decimal('regularHours', 8,2);
            $table->decimal('overTimeHours', 8,2);

            $table->foreign('employeeId')->references('employeeId')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
