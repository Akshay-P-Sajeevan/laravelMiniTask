<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_student', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('fk_parent_id');
            $table->foreign('fk_parent_id')->references('id')->on('tbl_parent')->onDelete('cascade');
            $table->enum('gender', ['male', 'female', 'other']);
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
        Schema::dropIfExists('tbl_student');
    }
}
