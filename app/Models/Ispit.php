<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;

class Ispit extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'espb',
        'semestar',
        'profesor_id'
    ];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
}
