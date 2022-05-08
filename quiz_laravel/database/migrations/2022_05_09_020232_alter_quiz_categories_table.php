<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterQuizCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table("quiz_categories", function (Blueprint $table) {
            $table->string("name", 200)->change();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table("quiz_categories", function (Blueprint $table) {
            $table->text("name", 200);
        });
    }
}
