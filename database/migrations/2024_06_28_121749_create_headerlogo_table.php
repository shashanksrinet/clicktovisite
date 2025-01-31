<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderLogoTable extends Migration
{
    public function up()
    {
        Schema::create('headerlogo', function (Blueprint $table) {
            $table->id('id');
            $table->string('img_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headerlogo');
    }
}
