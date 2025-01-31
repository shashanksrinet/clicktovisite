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
        Schema::table('funds', function (Blueprint $table) {
            $table->string('razorpay_payment_id')->nullable();
            $table->enum('status', ['pending', 'failed', 'completed'])->default('pending')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('funds', function (Blueprint $table) {
            //
        });
    }
};
