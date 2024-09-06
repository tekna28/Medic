<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends User
{
    protected $fillable = [
        'num_patient', 'prenom_patient', 'nom_patient', 'date_naissance', 'adresse_patient', 'sexe_patient',
        'antecedant', 'assurance', 'situation_familiale', 'num_telephone'
    ];
    use HasFactory;
}
