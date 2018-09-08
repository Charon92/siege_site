<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('image');
            $table->longtext('description');
            $table->integer('damage');
            $table->integer('magazine');
            $table->integer('rateOfFire');
            $table->integer('mobility');
            $table->text('first-sight')->nullable();
            $table->text('second-sight')->nullable();
            $table->text('third-sight')->nullable();
            $table->text('fourth-sight')->nullable();
            $table->text('first-barrel')->nullable();
            $table->text('second-barrel')->nullable();
            $table->text('third-barrel')->nullable();
            $table->text('fourth-barrel')->nullable();
            $table->text('fifth-barrel')->nullable();
            $table->text('first-grip')->nullable();
            $table->text('second-grip')->nullable();
            $table->text('underbarrel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapon');
    }
}
