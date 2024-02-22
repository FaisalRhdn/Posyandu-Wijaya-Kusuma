<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ortu';
    public function balitas()
    {
        return $this->BelongsTo(Balita::class, 'id_balita', 'id_balita');
            
    }
}
