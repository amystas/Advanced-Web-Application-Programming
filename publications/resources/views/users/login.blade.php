@extends('layouts.main')
@section('content')

<form action="{{ route('user.login') }}" method="post" 
class="w-5/12 border-solid border-gold border-4 ml-72 mt-40 px-20 bg-cornsilk rounded-xl py-10">
@csrf
    <h2 class="font-bold text-center text-4xl mb-4">Log in</h2>
    <input class="border-solid rounded-lg mb-4 text-2xl p-3" type="email" name="email" id="email" placeholder="email"> <br>
    @error('email')
	<p class="text-red-500 text-xs italic mb-2">{{ $message }}</p>
    @enderror
    <input class="border-solid rounded-lg text-2xl p-3 mb-4" type="password" name="password" id="password" placeholder="password"> <br>
    @error('password')
	<p class="text-red-500 text-xs italic mb-2">{{ $message }}</p>
    @enderror
    <input type="checkbox" name="remember_me" id="remember_me"> <label for="remember_me">Remember me</label>
    <button class="border-solid rounded-2xl bg-gold p-3 ml-32" type="submit">Log in</button>
</form>

@endsection