<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Katedra;
use App\Models\Ispit;

class Profesor extends Model
{
    use HasFactory;

    public function katedra()
    {
        return $this->belongsTo(Katedra::class);
    }

    public function ispiti()
    {
        return $this->hasMany(Ispit::class);
    }
}
