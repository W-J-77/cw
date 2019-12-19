<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrapeKeeperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grape_keeper', function (Blueprint $table) {
          $table->bigInteger('grape_id')->unsigned();
          $table->bigInteger('keeper_id')->unsigned();
          $table->primary(['grape_id','keeper_id']);
          $table->timestamps();

          $table->foreign('grape_id')->references('id')->on('grapes')
          ->onDelete('cascade')->onUpdate('cascade');

          $table->foreign('keeper_id')->references('id')->on('keepers')
          ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grape_keeper');
    }
}
