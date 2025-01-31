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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
        $table->string('logo_path');
        $table->text('description');
        $table->string('address');
        $table->string('phone');
        $table->string('link_one');
        $table->string('link_two');
        $table->string('link_three');
        $table->string('link_four');
        $table->string('link_five');
        $table->string('link_six');
        $table->string('link_seven');
        $table->string('link_eight');
        $table->string('facebook');
        $table->string('google');
        $table->string('twitter');
        $table->string('linkedin');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
