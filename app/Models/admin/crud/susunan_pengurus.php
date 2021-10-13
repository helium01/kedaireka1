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
        'ttl',
        'alamat',
        'foto',
    ];
    function delete_image()
    {
        if ($this->image && file_exists(public_path('admin/pegawai/' . $this->image)))
            return unlink(public_path('admin/pegawai/' . $this->image));
    }
}
