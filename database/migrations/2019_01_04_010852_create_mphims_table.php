<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMphimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mphims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('body_en')->nullable(false);
            $table->text('body_de')->nullable(false);
            $table->text('body_fr')->nullable(false);
            $table->text('body_it')->nullable(false);
            $table->text('body_rs')->nullable(false);
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
        Schema::dropIfExists('mphims');
    }
}
