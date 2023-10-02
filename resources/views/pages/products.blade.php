@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <!-- section START -->
    <section>
        
        <h1>Products</h1>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum pariatur molestiae rem sed deserunt, facere ullam quibusdam quo impedit, dicta, praesentium consequatur labore dolorum temporibus ipsam quidem minus aut culpa cum maiores excepturi nostrum voluptates.</p>
        

        <div class="row">
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product1.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col END -->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product2.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col END -->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product3.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col END -->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product4.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col END -->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product5.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col END -->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product6.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col END -->
        </div>

    </section>
    <!-- section END -->

@endsection