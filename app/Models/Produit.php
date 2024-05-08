<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    // Définir la table associée au modèle
    protected $table = 'produits';

    // Définir les champs remplissables
    protected $fillable = ['nom', 'description', 'prix', 'quantite_stock', 'categorie_id'];

    // Relation avec la table des catégories
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }
    
}

