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
        Schema::create('campaign_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');  // Foreign key to campaigns table
            $table->string('status')->nullable();  // API campaign status
            $table->string('moderation_status')->nullable();  // Moderation status
            $table->integer('impressions')->default(0);  // Number of impressions
            $table->integer('clicks')->default(0);  // Number of clicks
            $table->decimal('cost', 10, 2)->default(0.00);  // Total cost
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_statistics');
    }
};
