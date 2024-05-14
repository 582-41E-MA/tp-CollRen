<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joueurQuery = Product::query();
        $products = $joueurQuery->get();
        return view("products.index", ["products" => $products, "title" => "Liste des produits"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->nom = $request->nom;
        $product->description = $request->description;
        $product->prix = $request->prix;
        $product->quantite_stock = $request->quantite_stock;
        
        $product->save();

        return redirect()->route("products.index")->with("success", "Le produit à été ajouté avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function purchase(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        // Vérifier si la quantité demandée est disponible
        if ($request->quantity > $product->quantite_stock) {
            return redirect()->back()->with('error', 'La quantité demandée n\'est pas disponible.');
        }

        // Calculer le montant total en fonction de la quantité choisie
        $totalAmount = $product->prix * $request->quantity;

        // Effectuer la charge avec Stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            'amount' => $totalAmount * 100,
            'currency' => 'cad',
            'source' => $request->stripeToken,
            'description' => 'Achat de '.$product->nom,
        ]);

        // Mettre à jour la quantité en stock
        $product->quantite_stock -= $request->quantity;
        $product->save();
        

        return redirect()->back()->with('success', 'Paiement effectué avec succès.');
    }

}
