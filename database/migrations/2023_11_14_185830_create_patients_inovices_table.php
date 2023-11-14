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
        Schema::create('patients_inovices', function (Blueprint $table) {
            $table->uuid('invoice_id');
            $table->uuid('patient_id');
            $table->foreign('patient_id')->references('patient_id')->on('patients');
            $table->foreign('invoice_id')->references('invoice_id')->on('invoices');
            $table->primary(['invoice_id', 'patient_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_inovices');
    }
};
