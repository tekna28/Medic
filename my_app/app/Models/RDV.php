<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDV extends Model
{
    protected $fillable = [
        'num_rdv', 'nom_patient', 'prenom_patient', 'num_patient',
        'date_rdv', 'heure_rdv'
    ];
    use HasFactory;
}
