<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $primary_key = 'id';
    public $timestamps = true;
    protected $fillable = ['nama_jurusan'];

    public function mata_kuliah()
    {
        return $this->hasMany(MataKuliah::class);
    }

    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
