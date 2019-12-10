<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_companies', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('cia_name');
            $table->string('cia_web');
            $table->bigInteger('platform_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->foreign('category_id')->references('id')->on('categories');


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
        Schema::dropIfExists('_companies');
    }
}
