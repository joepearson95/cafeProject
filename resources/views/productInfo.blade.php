@extends('layouts.app')

@section('title', 'ProductInfo')

@section('content')
    <section id="info" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">{{ $productInformation->product_name }}</h1>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=217692eafea198d67733b9ee9c3f99d7&auto=format&fit=crop&w=1050&q=80" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <form action="addToCart" method="POST">
                                <h2 class="header-p">Product Description: {{ $productInformation->product_description }}</h2>
                                <input type="text" value="1"> <button class="btn btn-success" type="submit">+</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection