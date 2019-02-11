@extends('master')

@section('content')
<div class="space-60"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 margin-b-40">
            <!-- master slider template -->
            <div class="ms-showcase2-template ms-showcase2-vertical">
                <!-- master slider -->
                <div class="ms-skin-default">

                    <div class="ms-slide">
                        <img width="500" src="{{ asset('images/'.$product{'p_image'}) }}"  alt="lorem ipsum dolor sit"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="item-description">
                <h3>{{$product['p_title']}}</h3>
                <span class="price text-primary">${{$product['price']}}</span>
                <p>
                    {!! $product['article']!!}
                </p>

                <span>Availability: <em class="text-muted">In Stock</em></span>
                <span>Size: <em class="text-muted">SM, XL</em></span>
                <span>Colors: <em class="text-muted">Green, Red, Black, Grey</em></span>
                <div class="count-input">
                    <a class="incr-btn" data-action="decrease" href="#">–</a>
                    <input class="quantity" type="text" value="1">
                    <a class="incr-btn" data-action="increase" href="#">+</a>
                </div>
                @if(Cart::get($product['id']) )
                <a disabled="disabled" href="#" data-id="{{ $product['id']}}" class="btn btn-dark btn-xl btn-block add-to-cart-btn">Add to cart</a>
                @else
                <a data-id="{{ $product['id']}}" class="btn btn-dark btn-xl btn-block add-to-cart-btn">Add to cart</a>
                 @endif
                <a href="{{ url('shop/checkout') }}" class="btn btn-default btn-xl btn-block">Continue to checkout</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="space-20"></div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div>

                <!-- Nav tabs -->
                <ul class="tabs-nav list-inline text-center" role="tablist">
                    <li role="presentation" class="active"><a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Description</a></li>
                    <li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Information</a></li>
                    <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews <sup>2</sup></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="desc">
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="info">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td><strong>Weight:</strong></td>
                                    <td>0.15 Kg</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="review">
                        <ul class="comments-list list-unstyled margin-b-50">
                            <li class="clearfix">
                                <img src="{{asset('lib/boland/images/avtar.png')}}" alt="" class="img-circle pull-left">
                                <div class="overflow-hidden">
                                    <span class="pull-right rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </span>
                                    <h5>Mark Smith</h5>
                                    <span>Nov. 12, 2016 at 11:15: AM</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="{{ asset('lib/boland/images/avtar.png') }}" alt="" class="img-circle pull-left">
                                <div class="overflow-hidden">
                                    <span class="pull-right rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </span>
                                    <h5>Mark Smith</h5>
                                    <span>Nov. 12, 2016 at 11:15: AM</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <h4 class="margin-b-30">Add Review</h4>

                    </div>
                </div>
            </div><!--end tabs-->
        </div>
    </div>
</div>

<div class="space-30"></div>


@endsection
