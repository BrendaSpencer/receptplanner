@extends('layout.header')

@section('content')
<main class='flex justify-center flex-wrap m-3 '>
    @foreach($recepten as $recept)
    <div class="rounded flex justify-between m-4 p-3 w-1/5 items-center bg-gray-200/50">
        <div>
            <h2> {{ $recept->naam }}</h2>
            <p>{{ $recept->beschrijving }}</p>
            <ul>
                <li>{{ $recept->duurtijd }} minuten</li>
                <li>moeilijkheid: {{ $recept->moeilijkheid }} </li>
            </ul>
        </div>
        <div>
            <a href=""><img src="img/non-favorite.svg" alt="empty heart"></a>
            <a href=""><img src="img/calender.svg" alt="calender"></a>
            <a href="/recept/{{ $recept->id }}"> details</a>
        </div>
    </div>
    @endforeach
</main>
@endsection