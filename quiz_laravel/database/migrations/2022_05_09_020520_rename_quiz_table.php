<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class RenameQuizTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::rename("quizs", "quizzes");
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::rename("quizzes", "quizs");
    }
}
