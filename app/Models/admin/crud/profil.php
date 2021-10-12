<?php

namespace App\Models\admin\crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $table = 'profil';

    protected $fillable = [
        'profil_tirtarona',
        'visi',
        'misi',
        'akun_fb',
        'akun_twitter',
        'akun_whatsapp',
        'akun_instagram',
    ];
}
