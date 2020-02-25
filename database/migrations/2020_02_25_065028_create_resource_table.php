<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('resource')){
            Schema::create('resource', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('group_id');
                $table->foreign('group_id')->references('id')->on('group');
                $table->string('name', 16);
                $table->string('description', 255)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resource');
    }
}
