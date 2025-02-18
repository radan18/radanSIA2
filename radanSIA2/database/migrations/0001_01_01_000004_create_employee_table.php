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
        Schema::create('employee', function (Blueprint $table) {
            $table->id('employeeId');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->enum('gender', ['male','female']);
            $table->date('birthDate');
            $table->enum('maritalStatus', ['single','married', 'divorced', 'widowed']);
            $table->unsignedBigInteger('positionId');
            $table->date('hireDate');
            $table->string('address');
            $table->string('contactNo');
            $table->longText('qrCode')->charset('binary');
            $table->enum('status', ['regular','contract']);
            $table->dateTime('createdAt', 0);
            $table->dateTime('updatedAt', 0);
            
            $table->foreign('positionId')->references('positionId')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
