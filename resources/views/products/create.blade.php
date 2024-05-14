@extends('partials.base')

@section('title', 'Ajouter un produit')

@section('content')

    <main class="py-12 flex-auto flex flex-col justify-center align-center text-center gap-5 bg-white">
        <h1 class="text-3xl font-bold mb-8">Ajouter un produit</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" accept="image/*"
            class="max-w-md mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
            @csrf
            {{-- <div class="mb-4">
                <label for="image" class="text-left block mb-2 font-bold">Image</label>
                <input type="file" name="image" id="image"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('image') }}">
                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div> --}}
            <div class="mb-4">
                <label for="nom" class="text-left block mb-2 font-bold">Nom</label>
                <input type="text" name="nom" id="nom"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('nom') }}">
                @error('nom')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="text-left block mb-2 font-bold">Description</label>
                <input type="text" name="description" id="description"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('description') }}">
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="prix" class="text-left block mb-2 font-bold">Prix</label>
                <input type="number" name="prix" id="prix"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('prix') }}">
                @error('prix')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="quantite_stock" class="text-left block mb-2 font-bold">Quantité de stock</label>
                <input type="number" name="quantite_stock" id="quantite_stock"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('quantite_stock') }}">
                @error('quantite_stock')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button
                class="bg-green-700 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-600 transition duration-200"
                type="submit">Envoyer</button>
        </form>
    </main>
@endsection
