@extends('partials.base')

@section('title', 'Accueil')

@section('content')

    <div class="py-28 flex p-5 h-full place-content-around">
            <div class="mt-12">
                <h1 class="text-left text-5xl text-white">Liste des produits</h1>
            </div>
        </div>
    <main class="px-8 py-12 bg-gray-200">

    <section class="flex flex-wrap gap-3 justify-evenly">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($products as $product)
            <div class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                <a href="{{ route('products.show', ['product' => $product->id]) }}" class="text-amber-900 z-10 basis-1/4">
                    <p class="text-2xl my-4 font-bold text-green-800">{{ $product->nom }} {{ $product->prenom }}</p>
                    <p class="text-lg text-yellow-950"><strong>Description :</strong> {{ $product->descritpion }}</p>
                    <p class="text-lg text-yellow-950"><strong>Prix :</strong> {{ $product->prix }}</p>
                    <p class="text-lg text-yellow-950"><strong>Quantité :</strong> {{ $product->quantite_stock }}</p>
                </a>
            </div>
            @empty
            <p class="bg-amber-50 p-12 self-center text-lg rounded-lg">Aucun product disponible</p>
            @endforelse
        </div>
    </section>
</main>


@endsection
