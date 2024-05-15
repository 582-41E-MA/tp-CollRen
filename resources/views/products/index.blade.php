@extends('partials.base')

@section('title', 'Accueil')

@section('content')

@if(session("success"))
    <x-alert :type="'success'">
        {{(session("success"))}}
    </x-alert>
@endif

@if($products->isEmpty())
    <x-alert :type="'danger'">
        Vous n'avez aucun produit à afficher
    </x-alert>
@endif

<div class="py-28 flex p-5 h-full place-content-around" style="background-image: url('{{ Vite::asset('resources/images/paterreChapeau.webp') }}'); background-size: cover; background-position: center;">
    <div class="mt-12">
        <h1 class="text-left text-6xl text-white">Nos produits</h1>
    </div>
</div>
<main class="px-8 py-12 bg-gray-200">
    <section class="flex flex-wrap gap-3 justify-evenly">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($products as $product)
                <div class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="text-amber-900 z-10 basis-1/4">
                        @if($product->image)
                            <img src="{{ $product->imageFullPath()}}" alt="Image de {{ $product->nom}}" class="w-full mb-4 rounded-lg h-48 object-cover">
                        @else
                            <img src="{{ Vite::asset('resources/images/chapChau.jpg') }}" alt="Image par défaut" class="w-full mb-4 rounded-lg shadow-md h-48 object-cover">
                        @endif
                        <p class="text-2xl my-4 font-bold text-amber-900">{{ $product->nom }} {{ $product->prenom }}</p>
                        <p class="text-lg text-yellow-950"><strong>Description :</strong> {{ $product->description }}</p>
                        <p class="text-lg text-yellow-950"><strong>Prix :</strong> {{ $product->prix }}</p>
                        <p class="text-lg text-yellow-950"><strong>Quantité diponible:</strong> {{ $product->quantite_stock }}</p>
                    </a>
                </div>
            @empty
                <p class="bg-amber-50 p-12 self-center text-lg rounded-lg">Aucun produit disponible</p>
            @endforelse
        </div>
    </section>
</main>
<div class="mt-8 flex justify-center">
    <a href="{{ route('products.create') }}" class="bg-green-700 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-600 transition duration-200">Créer un nouveau produit</a>
</div>
@endsection
