@extends('master')
@section('title')
    Best Seller Indomie Berbagai Varian Rasa
    @foreach ($produk as $item)
        {{$item['name']}}
    @endforeach
@endsection

@section('description')
    @foreach ($produk as $item)
        {{$item['desc']}}
    @endforeach
@endsection

@section('content')
<div class="text-center container py-5">
    <h1 class="mt-4 mb-5 best-custom">Best Sellers</h1>

    <div class="row">
        @foreach ($produk as $item)
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card
            @if ($item['status'] == 'R')
                silver
            @elseif ($item['status'] == 'SR')
                gold
            @else
                red
            @endif row-custom" >
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"data-mdb-ripple-color="light">
                    <img src={{$item['image']}} class="w-100" />
                    <a href="/produk/{{$item['id']}}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="/produk/{{$item['id']}}" class="text-reset stretched-link">
                        <h5 class="card-title mb-3 font-weight-bold">{{ $item['name'] }}</h5>
                    </a>
                    <p>Status : {{ $item['status'] }}</p>
                    <h6 class="mb-3">{{ $item['price'] }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
