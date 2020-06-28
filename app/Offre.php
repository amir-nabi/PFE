<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'titre', 'secteur', 'categorie', 'description', 'image', 'prix', 'solde', 'active', 'date_debut', 'date_fin','user_id'
    ];

}
