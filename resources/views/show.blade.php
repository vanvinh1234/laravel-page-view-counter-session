@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Danh sách sản phẩm
    </div>

    <div class="row">
        @if(!isset($product))
            <p class="text-danger">Không có sản phẩn nào.</p>
        @else
            <div class="col-12">
                <div class="card text-left" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text text-dark">{{$product->price}}</p>
                        <p class="card-text text-danger">Số lượt xem: {{$product->view_count}}</p>
                        <a href="{{route('index')}}" class="btn btn-primary">Quay lại</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
