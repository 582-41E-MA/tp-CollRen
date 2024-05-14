@extends('partials.base')

@section('title','produit')

@section('content')

<div class="mt-24">
    <h1 class="text-center my-12 text-5xl text-black font-bold">Details du produit {{ $product->nom }}</h1>
</div>
<main class="flex-auto flex justify-center items-center text-center gap-5">
    <section class="flex gap-5 justify-center items-center">
        <div class="w-full bg-gray-200 border border-gray-300 p-6 rounded-lg shadow-md ">
            <p class="text-2xl font-bold">{{ $product->nom }}</p>
            <p class="text-lg">Description: {{ $product->description }}</p>
            <p class="text-lg">Prix: {{ $product->prix }} $CAD</p>
            <p class="text-lg">Quantité: {{ $product->quantite_stock }} restante(s)</p>
        </div>
        <form action="{{ route('products.purchase', ['product' => $product->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="mb-4">
                <label for="quantity" class="text-left block mb-2 font-bold">Quantité</label>
                <input type="number" name="quantity" id="quantity"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="1" min="1" max="{{ $product->quantite_stock }}"
                    onchange="updateTotalAmount()">
                @error('quantity')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="totalAmount" class="text-left block mb-2 font-bold">Montant Total</label>
                <p id="totalAmount" class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500">{{ $product->prix }}</p>
            </div>
            <script>
                var totalPrice = {{ $product->prix * 100 }}; // Prix unitaire en cents
                function updateTotalAmount() {
                    var quantity = document.getElementById('quantity').value;
                    var unitPrice = {{ $product->prix * 100 }}; // Prix unitaire en cents
                    var totalAmount = quantity * unitPrice / 100; // Convertir le montant total en dollars
                    document.getElementById('totalAmount').innerText = totalAmount.toFixed(2);
                    totalPrice = totalAmount * 100; // Mettre à jour le montant total
                }
            </script>
            <script id="stripeButton"
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ env('STRIPE_KEY') }}"
                data-name="{{ $product->nom }}"
                data-description="Achat de {{ $product->nom }}"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="cad"
                data-quantity="1"
                data-allow-remember-me="false">
            </script>
            <script>
                document.getElementById('stripeButton').setAttribute('data-amount', totalPrice);
            </script>
        </form>


    </section>
</main>


@endsection
        
        
        
        
        
        
        {{-- <div class="w-2/5 md:w-1/2">
            <div class="relative w-full h-96">
                @if($product->image)
                <img src="/storage/{{ $product->image }}" alt="Image de {{ $product->nom }}" class="object-cover w-full h-full rounded-lg shadow-md">
                @else
                <img src="{{ Vite::asset('resources/img/inconnu.jpg') }}" alt="Image par défaut" class="object-cover w-full h-full rounded-lg shadow-md">
                @endif
            </div>
        </div> --}}