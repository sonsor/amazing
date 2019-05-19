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
        $this->down();
        Schema::create('icons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('classes');
            $table->string('ios');
            $table->string('android');
            $table->bigInteger('description_id')->nullable();
            $table->bigInteger('version_id')->unsigned();
            $table->decimal('price', 8, 2)->default(0);
            $table->string('filename')->nullable();
            $table->boolean('paid')->default(false);
            $table->bigInteger('variation_id')->unsigned();
            $table->bigInteger('parent_id')->unsigned()->nullable();
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
