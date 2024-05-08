<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['user_id', 'montant_total', 'statut_commande'];

    // Relation avec l'utilisateur
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation avec les détails de la commande
    public function detailsCommande()
    {
        return $this->hasMany(DetailCommande::class);
    }

    // Autres relations ou méthodes propres aux commandes
}
