@extends('master')

@section('content')
<div class="page-breadcrumb">
    <div class="container">
        <h4> @if( !empty($title) ) {{ $title }} @endif </h4>
    </div>
  </div>

<div class="space-60"></div>
<div class="container">

        <div class="col-sm-6">
            <div class="cart-totals margin-b-20">
                <div class="cart-totals-title">
                    <h3>Cart Summary</h3>
                </div>
                <div class="cart-totals-fields">
                  @if($cart)
                    <table class="table">
                      <thead>
                        <tr>
                           <td>Product</td>
                           <td>Quantity</td>
                           <td>Price</td>
                           <td>Cart Subtotal</td>
                           <td>Add/Reduce</td>
                           <td>Operation</td>
                        </tr>
                      </thead>

                        <tbody>
                        @foreach($cart as $item)
                        <tr>
                          <td>{{ $item['name'] }}</td>
                          <td>{{ $item['quantity'] }}</td>
                          <td>$ {{ $item['price'] }}</td>
                          <td>$ {{ $item['price'] * $item['quantity'] }}</td>
                          <td class="text-center">
                            <a href="{{url('shop/update-cart?pid=' . $item['id'] . '&op=minus') }}" class="text-dark update-cart-button"><i class="fas fa-minus-circle"></i></a>
                            <input size="1" class="text-center" type="text"  value="{{$item['quantity'] }}">
                            <a href="{{url('shop/update-cart?pid=' . $item['id'] . '&op=plus')  }}" class="text-dark update-cart-button"><i class="fas fa-plus-circle"></i></a>
                            </td>

                            <td>
                              <a  class="text-danger pt-5" href="{{ url('shop/remove-item?pid=' .$item['id']) }}"><i class="fas fa-trash fa-lg"></i></a>
                           </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    <hr>
                      <p class="pull-right">
                        <b>Total In Cart: </b>$ {{Cart::getTotal()}}
                      <span class="text-right"><a class="btn btn-light" href="{{ url('shop/clear-cart') }}">Clear Cart</a></span>
                    </p>
                   <p class="text-center"><a class="btn btn-dark" href="{{url('shop/order-now')}}">ORDER NOW!</a></p>
                   @else
                  <p>CART IS EMPTY !!!!</p>

                 @endif
                 </div>
                 </div>
                </div>
                </div><!--cart summary-->
                
            </div>
        </div>
    </form>
</div>
 <div class="space-60"></div>






@endsection
