<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Document</title>
</head>
<body class="body-custom">
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
                    @endif" >
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                        data-mdb-ripple-color="light">
                            <img src={{$item['image']}} class="w-100" />
                            <a href="#!">
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset stretched-link">
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
    {{-- <a href="/produk/{{$item['id']}}">
        <div class="container d-flex justify-content-around card-custom">
            <div class="card red">
                <div class="card-body
                @if ($item['status'] == 'R')
                    silver
                @elseif ($item['status'] == 'SR')
                    gold
                @else
                    red
                @endif">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <p class="card-text">{{ $item['price'] }}</p>
                </div>
            </div>
        </div>
    </a> --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
