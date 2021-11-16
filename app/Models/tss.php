<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tss extends Model
{
    use HasFactory;
    protected $table="node_ipal_4";
    protected $fillable = [
        'id',
        'tss',
    ];
}
