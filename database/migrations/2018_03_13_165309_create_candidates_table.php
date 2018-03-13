<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('surname',30);
            $table->string('patronymic',30);
            $table->date('birthday');
            $table->string('placebirth',100);
            $table->string('location',100);
            $table->string('education',100);
            $table->string('placework',100);
            $table->string('workposition',100);
            $table->string('workdeputy',100);
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
        Schema::dropIfExists('candidates');
    }
}
