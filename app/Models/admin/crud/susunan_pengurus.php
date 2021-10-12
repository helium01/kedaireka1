<?php

namespace App\Models\admin\crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class susunan_pengurus extends Model
{
    use HasFactory;
    protected $table = 'susunan_pengurus';

    protected $fillable = [
        'nama',
        'kelamin',
        'jabatan',
        'alamat',
        'foto',
    ];
}
