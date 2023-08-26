<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_department_law_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentLawTable extends Migration
{
    public function up()
    {
        Schema::create('department_law', function (Blueprint $table) {
            $table->bigIncrements('catid');
            $table->string('CATEGOR');
            $table->string('CATEGOR_u');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('department_law');
    }
}
