@extends('layouts.main')


@php
    $productsCards = config('products');
@endphp

@extends('layouts.main')

@section('content')

{{-- products --}}

        @foreach ($productsCards as $item)
            <div class="singol-card card m-1">

                    <img class="first" src="/img/{{ $item['frontImage']}}" alt="{{$item['name']}}">
                    <img class="second"  src="/img/{{ $item['backImage']}}" alt="{{$item['name']}}">

                <span class="heart">&hearts;</span>
                    <div class="marks">
                        <span  class="range-discount">-50%</span>
                        <span  class="value">Sostenibilità</span>
                    </div>

                <div class="product-details">
                    <span class="brand">{{ $item['brand'] }}</span>
                    <h4 class="product-name">{{ $item['name'] }}</h4>
                    <span class="price">{{ $item['price'] }}</span>
                    <span class="discount">discount</span>
                </div>

            </div>
        @endforeach


@endsection
