@extends('partials.base')

@section('title','produit')

@section('content')


@if(session("error"))
    <x-alert :type="'danger'">
        {{(session("error"))}}
    </x-alert>
@endif
<div class="py-28 flex p-5 h-full place-content-around" style="background-image: url('{{ Vite::asset('resources/images/paterreChapeau.webp') }}'); background-size: cover; background-position: center;">
    <div class="mt-24" >
        <h1 class="text-center my-12 text-5xl text-white font-bold ">{{ $product->nom }}</h1>
    </div>
</div>
<main class="flex-auto flex justify-center items-center text-center gap-5 p-12">
    <section class="flex gap-5 justify-center items-center">
        <div class="w-full md:w-1/2">
            <div class="relative w-full h-full">
                @if($product->image)
                 <img src="{{ asset('storage/' . $product->image) }}" alt="Image de {{ $product->nom }}" class="w-full h-full rounded-lg shadow-md object-cover">
                @else
                    <img src="{{ Vite::asset('resources/images/chapChau.jpg') }}" alt="Image par défaut" class="object-cover w-full h-full rounded-lg shadow-md">
                @endif
            </div>
        </div>
        <div class="w-full bg-gray-200 border border-gray-300 p-6 rounded-lg shadow-md ">
            <p class="mt-6 text-left text-2xl font-bold">{{ $product->nom }}</p>
            <p class="mt-6 text-left text-lg"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="mt-6 text-left text-lg"><strong>Prix:</strong> {{ $product->prix }} $CAD</p>
            <p class="mt-6 text-left text-lg"><strong>Quantité:</strong> {{ $product->quantite_stock }} restante(s)</p>
            <form action="{{ route('products.purchase', ['product' => $product->id]) }}" method="POST" class="w-1/3 mx-auto">
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
        </div>
    </section>
</main>

@endsection
