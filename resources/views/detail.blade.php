@extends('master')
@section('title')
    {{$item['name']}}
@endsection

@section('description')
    {{$item['desc']}}
@endsection

@section('content')
    <div class="container d-flex justify-content-around">
        <div class="card">
            {{-- <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                alt="{{ $item['name'] }}"> --}}
            <div class="card-body">
                <h5 class="card-title">{{ $item['name'] }}</h5>
                <p class="card-text">{{ $item['price'] }}</p>
                <p class="card-text">{{ $item['desc'] }}</p>
            </div>
        </div>
    </div>
@endsection


</body>
</html>
