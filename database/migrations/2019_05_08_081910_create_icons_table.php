<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('classes');
            $table->longText('shortDescription')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description')->nullable();
            $table->string('version');
            $table->boolean('paid')->default(false);
            $table->integer('variation')->unsigned();
            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('icons');
            $table->foreign('variation')->references('id')->on('variation_types');
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
        Schema::dropIfExists('icons');
    }
}
