<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('slug');
            $table->longText('shortDescription')->nullable();
            $table->text('mediumDescription1')->nullable();
            $table->text('mediumDescription2')->nullable();
            $table->text('mediumDescription3')->nullable();
            $table->text('mediumDescription4')->nullable();
            $table->text('smallDescription1')->nullable();
            $table->text('smallDescription2')->nullable();
            $table->longText('description1')->nullable();
            $table->longText('description2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions');
    }
}
