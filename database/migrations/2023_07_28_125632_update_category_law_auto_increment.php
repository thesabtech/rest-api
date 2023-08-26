<?php

// database/migrations/xxxx_xx_xx_xxxxxx_update_category_law_auto_increment.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryLawAutoIncrement extends Migration
{
    public function up()
    {
        Schema::table('category_law', function (Blueprint $table) {
            $table->bigIncrements('catid')->autoIncrement()->change();
        });
    }

    public function down()
    {
        // No need to revert this change in this case
    }
}

