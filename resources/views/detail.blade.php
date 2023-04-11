@extends('master')
@section('title')
    {{$item['name']}}
@endsection

@section('description')
    {{$item['desc']}}
@endsection

@section('content')
<button class='btn btn-outline-dark' onclick="history.back()">Back</button>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0 rounded" src="{{asset($item['image'])}}"/>
            </div>
            <div class="col-md-6">
                <div class="lead mb-1 fw-bolder">Status: {{$item['status']}}</div>
                <h1 class="display-5 fw-bolder">{{$item['name']}}</h1>
                <div class="fs-5 mb-5">
                    <h4 class="display-5 fw-bolder">{{$item['price']}}</h4>

                </div>
                <p class="lead">{{$item['desc']}}</p>
            </div>
        </div>
    </div>
</section>
@endsection


</body>
</html>
