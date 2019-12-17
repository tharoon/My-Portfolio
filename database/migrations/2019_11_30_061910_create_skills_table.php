<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('skillname')->nullable($value = true);
            $table->string('skilltype')->nullable($value = true);
            $table->string('skillrating')->nullable($value = true);
            $table->string('box')->nullable($value = true);
            $table->string('languagesknown')->nullable($value = true);
            $table->string('languagerating')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
