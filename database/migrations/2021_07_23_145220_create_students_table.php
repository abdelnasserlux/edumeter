<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->bigInteger('no_number')->unique();
            $table->date('birth');
            $table->foreignId('state_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->json('school');
            $table->foreignId('type_id')->constrained();
            $table->foreignId('grade_id')->constrained();
            $table->foreignId('mathlevel_id')->constrained();
            $table->foreignId('sciencelevel_id')->constrained();
            $table->foreignId('hippolevel_id')->constrained();
            $table->foreignId('englishlevel_id')->constrained();
            $table->foreignId('parent_id')->nullable()->constrained();
            $table->foreignId('center_id')->constrained();
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
        Schema::dropIfExists('students');
    }
}
