@extends('layouts.main')

@section('title', 'ok')

@section('content')

<section>
    <div class="img-show">
        <h1>nome</h1>
        <img src="/img/attractions/{{ $point->image }}" alt="{{ $point->name }}">                
    </div>
</section>

@endsection