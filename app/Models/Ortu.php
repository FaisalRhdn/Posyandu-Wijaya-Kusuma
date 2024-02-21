<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ortu';
    public $incrementing = false;
    public function balitas()
    {
        return $this->hasMany(Balita::class, 'id_ortu', 'id_ortu');
    }
}
