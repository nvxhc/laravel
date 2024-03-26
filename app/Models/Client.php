<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [    
        'name',
        'address',
        'email',
        'ruta',
        'phone',
        'DNI',
        'RUC',
        'sector_id',
    ];
    public function sectors()
    {
        return $this->belongsTo(Sector::class);
    }
}
