<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;

class Katedra extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'broj_clanova',
        'sef',
    ];


    public function profesori()
    {
        return $this->hasMany(Profesor::class);
    }
}
