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
    Schema::create('datadosen', function (Blueprint $table) {
        
        $table->id(); 
        $table->string('dosen', 100);
        $table->string('id_dosen', 100)->default(0); 
        $table->string('email', 100);
        $table->string('konsentrasi', 100);
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
        Schema::dropIfExists('datadosen');
    }
};