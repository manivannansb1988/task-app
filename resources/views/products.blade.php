@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select Product:</div>
 
                <div class="card-body">
 
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                  <div class="card-header"> 
                                        ${{ $product->price }}/Mo
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{$product->description}}</p>
  
                                    <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary pull-right">Choose</a>
  
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