<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = array("nom", "description","prix" ,"quantite_stock", "image");

    public function imageFullPath(){
        return "/storage/$this->image";
    }
}
