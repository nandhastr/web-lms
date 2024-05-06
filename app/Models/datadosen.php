<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadosen extends Model
{
    protected $table = 'datadosen';
    protected $primaryKey = 'id';
    protected $fillable = [
    'id', 'dosen', 'id_dosen', 'email', 'konsentrasi'
   ];
}
