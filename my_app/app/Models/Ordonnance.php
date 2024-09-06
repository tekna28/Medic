<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $fillable = [
        'num_ordonnance', 'nom_patient', 'prenom_patient', 'nom_medicament',
        'dosage', 'quantite', 'duree_consommation'
    ];
    use HasFactory;
}
