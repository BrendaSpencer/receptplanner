@extends('layout.header')

@section('content')
<main class='flex justify-center flex-wrap m-3 '>
    <div class='  rounded  m-4 p-3 w-1/3 items-center bg-gray-200/50 '>
        <h1 class="p-3"> {{ $recept->naam }} </h1>
        <span class="p-3"> duurtijd {{ $recept->duurtijd }} minuten     |</span>
        <span class="p-3"> moeilijkheid: {{ $recept->moeilijkheid }}/5 </span>
        <p class="p-3"> Beschrijving: {{ $recept->beschrijving }} </p>

        <h2 class="p-3">Ingredienten:</h2>

        @foreach($recept->ingredienten as $ingredient)
        <p> - {{$ingredient->naam }}
            {{ $ingredient->pivot->aantal}}
            {{ $ingredient->pivot->eenheid}}
        </p>

        @endforeach

        <p class="p-3"> {{ $recept->recept }} </p>

    <p class="p-3"> geplaatst door: {{ $recept->user->firstname }}</p>
    </div>



</main>

@endsection