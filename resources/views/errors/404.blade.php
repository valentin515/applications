@extends('layouts.error')

@section('error.content')
    <x-h1>404 Page not found</x-h1>
    <a class="btn btn-primary" href="{{route('home')}}">Go home</a>    
@endsection

