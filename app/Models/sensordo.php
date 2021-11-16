<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensordo extends Model
{
    use HasFactory;
    protected $table="node_ipal_2";
    protected $fillable = [
        'id',
        'do',
    ];

}
