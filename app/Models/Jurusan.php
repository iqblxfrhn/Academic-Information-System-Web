<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jurusan'];
    protected $table = 'jurusan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
}
