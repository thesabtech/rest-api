<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help', function (Blueprint $table) {
            $table->bigIncrements('ACTID_help');
            $table->string('title_act_help');
            $table->string('title_act_help_u');
            $table->string('act_roman_help');
            $table->string('act_roman_help_u');
            $table->string('a1_volume_help');
            $table->string('Year_help');
            $table->string('Year_help_u');
            $table->string('law_type');
            $table->string('law_type_u');
            $table->string('law_content');
            $table->string('promulgate_dt');
            $table->string('updated_dt');
            $table->string('review_1_download');
            $table->string('review_1');
            $table->string('review_2_download');
            $table->string('review_2');
            $table->string('estatus');
            $table->string('eusr');
            $table->string('edate');
            $table->string('msgbox');
            $table->string('sstatus');
            $table->string('loocked');
            $table->string('archiv_actid');
            $table->string('archiv_serial');
            $table->string('versioon');
            $table->string('urdu_avlble');
            $table->string('serial_no');
            $table->string('update_dt');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('help');
    }
}
