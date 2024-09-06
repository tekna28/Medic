<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends User
{
    protected $fillable = [
        'num_secretaire', 'nom_secretaire', 'prenom_secretaire',
        'num_telephone'
    ];
    use HasFactory;
}
