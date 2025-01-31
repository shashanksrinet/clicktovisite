<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditcardslistTable extends Migration
{
    public function up()
    {
        Schema::create('creditcardslist', function (Blueprint $table) {
            $table->id('card_id');
            $table->string('card_name');
            $table->unsignedBigInteger('bank_id');
            $table->string('reward_type')->nullable();
            $table->decimal('annual_fee', 8, 2)->nullable();
            $table->decimal('joining_fee', 8, 2)->nullable();
            $table->string('apply_now')->nullable();
            $table->string('know_more')->nullable();
            $table->text('features')->nullable();
            $table->text('eligibility')->nullable();
            $table->text('documents_required')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('creditcardslist');
    }
}
