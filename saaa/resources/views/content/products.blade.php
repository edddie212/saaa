@extends('master')

@section('content')
@if(!empty ($products) )

<div class="page-breadcrumb margin-b-60">
    <div class="container">
      <div class="row">


      <h1 class="text-white">{{ $products[0]->title }}</h1>
      <p class="text-white">Total {{ $total_count }} Products found.</p>
    </div>
    </div>
</div>
<!--page header-->

      <div class="container">
          <div class="row filter-row">
              @foreach($products as $product)
                  <div class="col-sm-4 ">
                     <div class="product-box ">
                        <div class="product-thumb">
                          <h3 class="text-center"><a>{{ $product->p_title }}</a></h3>
                            <img  src="{{ asset('images/'. $product->p_image) }}" alt="" class="img-responsive">
                            <div class="product-overlay">
                                <span>
                                    <a class="btn btn-default" href="{{ url('shop/'. $product->url . '/' . $product->p_url ) }}">View Product</a>
                                    @if(Cart::get($product->id))
                                    <a disabled="disabled" class="btn btn-primary add-to-cart-btn" data-id="{{ $product->id }}"  >Add to cart</a>
                                     @else
                                    <a  class="btn btn-primary add-to-cart-btn" data-id="{{ $product->id }}"  >Add to cart</a>
                                     @endif
                                </span>
                            </div>
                          </div>
                        </div><!--/product-thumb-->
                        <div class="product-desc">
                            <span class="product-price pull-right">$ {{ $product->price }}</span>
                            <h5 class="product-name">{{$product->p_title}}</h5>
                            <p> {!!str_limit($product->article, 29, '...')!!}</p>
                        </div><!--/product-desc-->
                </div>

            @endforeach
          </div>

          <div class="row">
              <div class="col text-center">
                {{ $products->links() }}
                </div>
            </div>
          </div>
       <div class="space-30"></div>





@endif
@endsection
