<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ph extends Model
{
    use HasFactory;
    protected $table="node_ipal_1";
    protected $fillable = [
        'id',
        'ph',
    ];
}
