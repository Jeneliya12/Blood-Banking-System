<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('donors', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email');
        $table->string('number');
        $table->binary('img');
        $table->text('address');
        $table->string('blood');
        $table->string('profession');
        $table->string('education');
        $table->string('religion');
        $table->string('gender');
        $table->string('age');
        $table->date('birth');
        $table->text('description');
        $table->date('date');
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
        Schema::dropIfExists('donors');
    }
}
