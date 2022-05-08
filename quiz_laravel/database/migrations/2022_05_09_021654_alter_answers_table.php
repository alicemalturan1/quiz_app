<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAnswersTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table("answers", function (Blueprint $table) {
            $table->renameColumn("text", "answer");
            $table->foreignId("question_id")->change()->constrained("questions")->cascadeOnDelete();
            $table->boolean("is_true")->change()->default(false)->index();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        //
    }
}
