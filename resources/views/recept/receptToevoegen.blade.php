@extends('layout.header')

@section('content')
<div class="flex justify-center">
    <div class="w-10/12 bg-gray-200/50  p-6 rounded-lg ">
        <h1 class="p-4 text-gray-600">Recept toevoegen</h1>
        <form action="{{ route('receptToevoegen') }}" method="POST">
        <div class="p-4 w-full">
        Kies de categorien die bij het recept passen:
        @foreach ($categories as $categorie)
        <input type="checkbox" id="categorie" name="categorien[]" value="{{ $categorie->id }}">
        <label for="{{ $categorie->id }}">{{ $categorie->naam  }}/ </label>
        @endforeach
    </div>
            <div class="flex">
                <div class="w-4/12 bg-gray-200/50  p-4 rounded-lg ">
                    @csrf
                    <div class="mb-4">
                        <label for="naam">Receptnaam:</label>
                        <input type="text" name="naam" id="naam" 
                        placeholder="Receptnaam" class="bg-gray-100 border-2 w-full p-4 rounded-lg" 
                        value="{{ old('naam') }}"  required>
                    </div>
                    <div class="mb-4">
                        <label for='beschrijving'>Omschrijving</label>
                        <input type="text" name="beschrijving" id="beschrijving" 
                        placeholder="omschrijving" class="bg-gray-100 border-2 w-full p-4 rounded-lg" 
                        value="{{ old('omschrijving') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for='recept'>Recept</label>
                        <textarea name="recept" id="recept" 
                        placeholder="recept" rows="10" cols="50" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" 
                        value="{{ old('omschrijving') }}" required>
                </textarea>
                    </div>
                </div>
                <div class=" bg-gray-200/50  p-4 rounded-lg ">
                    <button id="newChildButton" onclick="maakNieuwIngredient()" type="button">ingredient toevoegen</button>
                    <table class="w-4/12">
                        <thead>
                            <tr>
                                <th>ingredient</th>
                                <th>aantal</th>
                                <th>eenheid</th>
                            </tr>
                        </thead>
                        <tbody id="parent">
                            <tr>
                                <td > <select class=" p-2 rounded-lg" name="ingredient[0][0]" id="ingredient">
                                        @foreach($ingredienten as $ingredient)
                                        <option value="{{ $ingredient->id }}">
                                            {{ $ingredient->naam }}
                                        </option>

                                        @endforeach
                                    </select></td>
                                <td > <input class=" m-1 p-2 rounded-lg" type="number" name="ingredient[0][1]" id="aantalIngredient" required></td>
                                <td > <input class=" m-1 p-2 rounded-lg" type="text" name="ingredient[0][2]" id="eenheidIngredient" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div class="w-3/12 bg-gray-200/50  p-4 rounded-lg ">
                <div class="mb-4">
                    <label for='duurtijd'>duurtijd in minuten</label>
                    <input type="number" name="duurtijd" id="duurtijd" 
                    placeholder="duurtijd in minuten" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg"  required>
                </div>
                <div class="mb-4">
                    <label for='aantal'>aantal personen</label>
                    <input type="number" name="aantal" id="aantal" 
                    placeholder="aantal personen" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="moeilijkheid">moeilijkheid</label>
                    <select name="moeilijkheid" id="moeilijkheid" class="bg-gray-100 border-2 w-full p-4 rounded-lg" required>
                        <option value="1">1: Heel makkelijk</option>
                        <option value="2">2: makkelijk</option>
                        <option value="3">3: goed te doen</option>
                        <option value="4">4: moeilijk</option>
                        <option value="5">5: Heel moeilijk</option>
                    </select>
                </div>
               
                <div>
                    <button type="submit" class="bg-lime-600 mt-6 text-white px-4 py-3 rounded font-medium w-full">
                        Recept toevoegen </button>


                </div>
            </div>
    </div>
   
    </form>
</div>
</div>



@endsection