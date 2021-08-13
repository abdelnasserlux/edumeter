<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_center', function (Blueprint $table) {
            $table->foreignId('state_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('center_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['state_id', 'center_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state_center');
    }
}
