<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends User
{
    protected $fillable = [
        'num_medecin', 'nom_medecin', 'prenom_medecin', 'description', 'num_telephone'
    ];
    use HasFactory;
}
