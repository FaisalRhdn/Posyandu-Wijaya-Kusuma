<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_balita';
    public $incrementing = false;

    protected $casts = [
        'bb_lahir' => 'decimal:1',
        'pb_lahir' => 'decimal:1'
    ];
}
