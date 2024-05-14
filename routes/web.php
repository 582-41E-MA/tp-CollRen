<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/panier', function () {
    return view('panier');
});


//Route pour les produits
// Route::get('/produits', [ProduitController::class, 'index']);
// Route::get('/produits/{id}', [ProduitController::class, 'show']);
// Route::post('/produits', [ProduitController::class, 'store']);
// Route::put('/produits/{id}', [ProduitController::class, 'update']);
// Route::delete('/produits/{id}', [ProduitController::class, 'destroy']);

///Route pour les utilisateur
Route::get('/utilisateur', [UtilisateurController::class, 'index']);
Route::get('/utilisateur/{id}', [UtilisateurController::class, 'show']);
Route::get('/utilisateur/create', [UtilisateurController::class, 'create'])->name('utilisateur.create');
Route::post('/utilisateur', [UtilisateurController::class, 'store']);



//route pour le nouveau produit controller
Route::resource("/products", ProductsController::class);
//Route pour gérer les paiement
Route::post('/products/{product}/purchase', [ProductsController::class, 'purchase'])->name('products.purchase');


