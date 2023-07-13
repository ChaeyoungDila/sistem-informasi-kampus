<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $primary_key = 'id';
    public $timestamps = true;
    protected $fillable = ['nama_dosen', 'jurusan_id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
