<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'id';
    protected $fillable = [
    'id', 'id_course', 'course', 'enrollment_key_dosen', 'enrollment_key_mahasiswa', 'kelas', 'partisipan'
   ];
}
