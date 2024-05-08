@extends('partials.base')

@section('titre', trans('Pricing'))

@section('content')

<body>
<div class="mt-24">
  
  <main class="max-w-6xl mx-auto pt-10 pb-36 px-8">
  {{-- Le bouton ci-dessous sert d'exemple 
  -> ajouter un type de la liste disponible dans /views/components/button.blade
  pour modifier le style du bouton et remplacer Test par le mot que vous voulez retrouver à l'intérieur du btn
  --}}
  <x-button type='success'>Test</x-button>


  <x-panier>Cart</x-panier>
 <div class='bg-clr-fonce-900 mt-2.5 py-2'>clr-fonce-900</div>
<div class='bg-clr-fonce-800 mt-2.5 py-2'>clr-fonce-800</div>
<div class='bg-clr-fonce-700 mt-2.5 py-2'>clr-fonce-700</div>
<div class='bg-clr-fonce-600 mt-2.5 py-2'>clr-fonce-600</div>
<div class='bg-clr-fonce-500 mt-2.5 py-2'>clr-fonce-500</div>
<div class='bg-clr-fonce-400 mt-2.5 py-2'>clr-fonce-400</div>
<div class='bg-clr-fonce-300 mt-2.5 py-2'>clr-fonce-300</div>
<div class='bg-clr-fonce-200 mt-2.5 py-2'>clr-fonce-200</div>
<div class='bg-clr-fonce-100 mt-2.5 py-2'>clr-fonce-100</div>
<div class='bg-clr-mid-900 mt-2.5 py-2'>clr-mid-900</div>
<div class='bg-clr-mid-800 mt-2.5 py-2'>clr-mid-800</div>
<div class='bg-clr-mid-700 mt-2.5 py-2'>clr-mid-700</div>
<div class='bg-clr-mid-600 mt-2.5 py-2'>clr-mid-600</div>
<div class='bg-clr-mid-500 mt-2.5 py-2'>clr-mid-500</div>
<div class='bg-clr-mid-400 mt-2.5 py-2'>clr-mid-400</div>
<div class='bg-clr-mid-300 mt-2.5 py-2'>clr-mid-300</div>
<div class='bg-clr-mid-200 mt-2.5 py-2'>clr-mid-200</div>
<div class='bg-clr-mid-100 mt-2.5 py-2'>clr-mid-100</div>
<div class='bg-clr-pale-900 mt-2.5 py-2'>clr-pale-900</div>
<div class='bg-clr-pale-800 mt-2.5 py-2'>clr-pale-800</div>
<div class='bg-clr-pale-700 mt-2.5 py-2'>clr-pale-700</div>
<div class='bg-clr-pale-600 mt-2.5 py-2'>clr-pale-600</div>
<div class='bg-clr-pale-500 mt-2.5 py-2'>clr-pale-500</div>
<div class='bg-clr-pale-400 mt-2.5 py-2'>clr-pale-400</div>
<div class='bg-clr-pale-300 mt-2.5 py-2'>clr-pale-300</div>
<div class='bg-clr-pale-200 mt-2.5 py-2'>clr-pale-200</div>
<div class='bg-clr-pale-100 mt-2.5 py-2'>clr-pale-100</div>
    
</main>
</body>
@endsection
</html>