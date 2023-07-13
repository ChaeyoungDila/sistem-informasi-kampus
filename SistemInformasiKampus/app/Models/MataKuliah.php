<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $primary_key = 'id';
    public $timestamps = true;
    protected $fillable = ['nama_matkul', 'jurusan_id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
