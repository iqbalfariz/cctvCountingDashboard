<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counting extends Model
{
    use HasFactory;

    protected $table = 'cctv_count';

    protected $fillable = [
        'in',
        'out',
        'total',
    ];
}
