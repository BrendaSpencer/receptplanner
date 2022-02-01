@extends('layout.header')




@section('content')
<div class="flex justify-center">  
   
    <div class="w-4/12 bg-gray-200/50  p-6 rounded-lg ">
    <h1 class="p-4 text-gray-600">Registreren</h1>
        <form action="{{ route('registreer') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="firstname" class="sr-only">Voornaam</label>
                <input type="text" name="firstname" id="firstname" placeholder="jouw voornaam"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('name') border-red-500 @enderror" value="{{ old('firstname') }}">
            
                @error('firstname')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lastname" class="sr-only">Achternaam</label>
                <input type="text" name="lastname" id="lastname" placeholder="jouw achternaam"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">
            
                @error('lastname')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Gebruikersnaam</label>
                <input type="text" name="username" id="username" placeholder="gebruikersnaam"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="email" class="sr-only">email</label>
                <input type="email" name="email" id="email" placeholder="jouw email"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="kies een password"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">herhaal password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                placeholder="password herhalen" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            
            </div>
            <div>
                <button type="submit" class="bg-lime-600 text-white px-4 py-3 rounded font-medium w-full">
                    Registeren
                </button>
            </div>
        </form>
        
    </div>
</div>
@endsection