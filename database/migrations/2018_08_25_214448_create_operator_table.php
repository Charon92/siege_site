<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operator', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('fullname');
            $table->string('position');
            $table->string('fullimage');
            $table->string('halfimage');
            $table->string('icon');
            $table->date('dob');
            $table->longtext('description');
            $table->string('birthplace');
            $table->string('ctu');
            $table->string('ability_name');
            $table->string('ability_description');
            $table->string('ability_image');
            $table->integer('first_weapon_id')->nullable();
            $table->integer('second_weapon_id')->nullable();
            $table->integer('third_weapon_id')->nullable();
            $table->integer('fourth_weapon_id')->nullable();
            $table->integer('fifth_weapon_id')->nullable();
            $table->string('gadget_one');
            $table->string('gadget_two');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operator');
    }
}
