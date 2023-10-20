@extends('layouts.base')

@section('base.content')

<section>
    <div class="container">
        <x-h1 class="mb-3">Домашняя страница</x-h1>
        <div class="row">
            <div class="col-4">
                <x-h2>Создайте заявку</x-h2>
                @include('includes.application')   
            </div>
        </div>
    </div>
</section>
@endsection

