<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id(); 
            $table->string('id_course', 100)->default(0);
            $table->string('course', 100); 
            $table->string('enrollment_key_dosen', 100);
            $table->string('enrollment_key_mahasiswa', 100);
            $table->string('kelas', 100);
            $table->integer('partisipan')->autoIncrement()->change();
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
        Schema::dropIfExists('course');
    }
};
