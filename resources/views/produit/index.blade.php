@extends('partials.base')

@section('titre', trans('About'))

@section('content')

    <body>

        <main>
            <div class="collections">
                <div class="collections__uneCollection">
                    <x-collection>Chapeau</x-collection>
                </div>
                <div class="collections__uneCollection">
                    <x-collection>Chaussure</x-collection>
                </div>
            </div>
        </main>

    </body>
@endsection

</html>
