<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHireMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hireme', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount')->nullable($value = true);
            $table->string('mainservice')->nullable($value = true);
            $table->string('service1')->nullable($value = true);
            $table->string('service2')->nullable($value = true);
            $table->string('service3')->nullable($value = true);
            $table->string('service4')->nullable($value = true);
            $table->string('box')->nullable($value = true);
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
        Schema::dropIfExists('hireme');
    }
}
