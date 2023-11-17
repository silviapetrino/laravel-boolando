@extends('layouts.main')


@php
    $productsCards = config('products');
@endphp


@section('content')

{{-- products --}}



        @foreach ($productsCards as $item)
        <div class="singol-card card m-1">

                <img class="first" src="/img/{{ $item['frontImage']}}" alt="{{$item['name']}}">
                <img class="second"  src="/img/{{ $item['backImage']}}" alt="{{$item['name']}}">

            <span class="heart">&hearts;</span>

            <div class="marks">
                @if (($item['badges']))
                    @foreach ($item['badges'] as $badge)
                        @if ($badge['type'] === 'tag')
                            <span class="value">{{ $badge['value'] }}</span>
                        @elseif ($badge['type'] === 'discount')
                            <span class="range-discount">{{ $badge['value'] }}</span>
                        @endif
                    @endforeach
                @endif
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
