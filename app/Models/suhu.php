<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suhu extends Model
{
    use HasFactory;
    protected $table="node_ipal_3";
    protected $fillable = [
        'id',
        'suhu',
    ];
}
