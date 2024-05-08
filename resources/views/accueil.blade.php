         @extends('partials.base')

         @section('titre', trans('About'))

         @section('content')

             <body>
                 <section class="relative bg-cover bg-center bg-no-repeat">
                     <div
                         class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
                         <img src="{{ Vite::asset('resources/images/magasinChapeau.webp') }}" alt="About Us Image"
                             class="object-cover rounded-lg shadow-md">
                     </div>

                     <div
                         class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
                         <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                             <h1 class="text-3xl font-extrabold sm:text-5xl">
                                 Laisez-nous vous aider à trouver le

                                 <strong class="block font-extrabold text-clr-pale-200"> Chapeau idéal </strong>
                             </h1>

                             <p class="mt-4 max-w-lg sm:text-xl/relaxed">
                                 À chacun sa tête, chacun son idéal. Une boutique sur mesure pour un un choix sans
                                 équivoque!
                             </p>

                             <div class="mt-8 flex flex-wrap gap-4 text-center">
                                 <x-button type=acheter>Débuter</x-button>
                                 <x-button type=acheter>En savoir plus</x-button>
                             </div>
                         </div>

                         <div>
                         </div>
                 </section>
             </body>
         @endsection

         </html>
