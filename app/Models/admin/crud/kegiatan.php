<?php

namespace App\Models\admin\crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';

    protected $fillable = [
        'foto',
        'nama_kegiatan',
        'jenis_kegiatan',
        'tanggal_kegiatan',
        'deskripsi_kegiatan',
    ];


    function delete_image()
    {
        if ($this->image && file_exists(public_path('admin/pegawai/' . $this->image)))
            return unlink(public_path('admin/pegawai/' . $this->image));
    }
}
