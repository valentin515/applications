@extends('layouts.base')

@section('base.content')
    <section>
        <div class="d-flex align-items-center justify-content-center flex-column min-vh-100">
            @yield('error.content')     
        </div>
    </section>
@endsection
