<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    'prenom',
    'email',
    'telephone',
    'time',
    'date',
    ];

    protected $table = 'rendezvous';
}
