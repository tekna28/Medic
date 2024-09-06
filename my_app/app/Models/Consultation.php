<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'num_consultation', 'nom_patient', 'prenom_patient', 'nom_medecin',
        'prenom_medecin', 'date', 'heure', 'conclusion'
    ];
    use HasFactory;
}
