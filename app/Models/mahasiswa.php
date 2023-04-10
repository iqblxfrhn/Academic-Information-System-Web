<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nim', 'jurusan_id', 'alamat'];
    protected $table = 'mahasiswa';
    public $timestamps = false;

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
