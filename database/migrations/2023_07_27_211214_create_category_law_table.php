<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryLawTable extends Migration
{
    public function up()
    {
        Schema::create('category_law', function (Blueprint $table) {
            $table->bigIncrements('catid');
            $table->string('CATEGOR');
            $table->string('CATEGOR_u');
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_law');
    }
}
