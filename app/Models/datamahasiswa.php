<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datamahasiswa extends Model
{
    protected $table = 'datamahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = [
    'id', 'nim', 'mahasiswa', 'email', 'program_studi', 'kelas'
   ];
}
