<div>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <header class="text-center">
                    <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">{{ $slot }}</h1>
                </header>

                <div class="mt-8">
                    <ul class="space-y-4">
                        <!-- Produit: Chapeau -->
                        <li class="flex items-center gap-4">
                            <img src="{{ Vite::asset('resources/images/magasinChapeau.webp') }}" alt="Chapeau" class="size-16 rounded object-cover" />

                            <div>
                                <h3 class="text-sm text-gray-900">Chapeau</h3>

                                <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                                    <div>
                                        <dt class="inline">Taille:</dt>
                                        <dd class="inline">Unique</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="flex flex-1 items-center justify-end gap-2">
                                <!-- Bouton de paiement pour le chapeau -->
                                <a href="https://buy.stripe.com/test_3cs9Bk28VdEw8ladQU" class="block rounded bg-gray-700 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600">Acheter Chapeau</a>
                            </div>
                        </li>

                        <!-- Produit: Chaussure -->
                        <li class="flex items-center gap-4">
                            <img src="{{ Vite::asset('resources/images/magasinChapeau.webp') }}" alt="Chaussure" class="size-16 rounded object-cover" />

                            <div>
                                <h3 class="text-sm text-gray-900">Chaussure</h3>

                                <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                                    <div>
                                        <dt class="inline">Taille:</dt>
                                        <dd class="inline">Unique</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="flex flex-1 items-center justify-end gap-2">
                                <!-- Bouton de paiement pour les chaussures -->
                                <a href="https://buy.stripe.com/test_bIYeVE4h3580atieUX" class="block rounded bg-gray-700 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600">Acheter Chaussure</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
