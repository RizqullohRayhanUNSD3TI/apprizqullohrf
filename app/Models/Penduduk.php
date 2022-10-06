<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','nik','gender','alamat','status','pekerjaan','kewarganegaraan','tempat_lahir','tanggal_lahir','goldar'];
}
