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
    Schema::create('datamahasiswa', function (Blueprint $table) {
        
        $table->id(); 
        $table->string('mahasiswa', 100);
        $table->string('nim', 100)->default(0); 
        $table->string('email', 100);
        $table->string('program_studi', 100);
        $table->string('kelas', 100);
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
        Schema::dropIfExists('datamahasiswa');
    }
};