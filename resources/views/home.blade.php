@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                           
                        </div>
                    @endif 
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                  <div class="card-header"> 
                                        $ {{ $product->price }}
                                  </div>
                                  <div class="card-body">
                                    <img src="https://m.media-amazon.com/images/I/315z32RYG9L.jpg" width="200px;">
                                    <h5 class="card-title">{{ $product->product_name }}</h5>
                                    <p class="card-text">{{$product->description}}</p>
  
                                    <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary pull-right">Buy Now</a>
  
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
