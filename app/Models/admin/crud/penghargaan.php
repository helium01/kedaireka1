<?php

namespace App\Models\admin\crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghargaan extends Model
{
    use HasFactory;
    protected $table = 'penghargaan';

    protected $fillable = [
        'foto',
        'tanggal_penghargaan',
        'penghargaan_dari',
        'deskripsi_penghargaan',
    ];
}
