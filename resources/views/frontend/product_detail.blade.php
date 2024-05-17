@extends('layouts.site')
@section('content')
    <!-- product -->



    <div class="col-md-5 img-detail border">
        <img src="{{ asset('assets/imge/sp1.jpg') }}" alt="">
    </div>

    <div class="col-md-7">
        <h3 class="font-weight-semi-bold"></h3>
        <div class="d-flex md-3">
            <div class="text-primary mr-2">
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star-half-alt"></small>

            </div>
            <small class="pt-1">(50 Rewiews)</small>

        </div>
        <h3 class="font-weight-semi-bold md-4">$ </h3>
        <p class="mb-4"></p>
        <div class="d-flex align-items-center mb-4 pt-2">
            <div class="input-group quantity mr-3" style="width: 130px;">
                <div class="input-group-btn">
                    <button class="btn btn-success btn-minus">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <input type="text" class="form-control input-number" value="1" min="1" max="100">
                <div class="input-group-btn">
                    <button class="btn btn-success btn-plus">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div>
                <a href="">
                    <button class="btn btn-success px-3 ms-2">

                        <i class="fa fa-shopping-cart mr-1"></i>Thêm Vào Giỏ Hàng

                    </button>
            </div>




        </div>

    </div>

@endsection
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/css.css') }}">
@endsection

@section('title', 'Products')
