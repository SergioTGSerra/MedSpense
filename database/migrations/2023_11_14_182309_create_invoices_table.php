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
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('invoice_id')->primary();
            $table->uuid('patient_id');
            $table->foreign('patient_id')->references('patient_id')->on('patients');
            $table->uuid('appointment_id');
            $table->foreign('appointment_id')->references('appointment_id')->on('appointments');
            $table->float('total');
            $table->enum('status', ['Paid', 'Unpaid']);
            $table->date('payment_date');
            $table->enum('payment_method', ['Cash', 'Card']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
