@extends('master')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="page-breadcrumb">
              <div class="container">
                  <h4>Wishlist</h4>
              </div>
          </div>
          <div class="space-60"></div>
          <div class="container">
              <div class="table-responsive">
                  <table class="table table-bordered cart-table">
                      <thead>
                          <tr>
                              <th></th>
                              <th>Product Name</th>
                              <th>Unit Price</th>
                              <th>Availability</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="item-thumb">
                                  <img src="images/products/p4.jpg" alt="" width="90">
                              </td>
                              <td class="item-name">
                                  <h4><a href="#">Norm Soap Pump</a></h4>
                              </td>
                              <td class="item-price">
                                  <h4>$12.00</h4>
                              </td>
                              <td>
                                  In Stock
                              </td>
                              <td><a href="#" class="btn btn-default btn-lg">Add to cart</a></td>
                          </tr>
                           <tr>
                              <td class="item-thumb">
                                  <img src="images/products/p3.jpg" alt="" width="90">
                              </td>
                              <td class="item-name">
                                  <h4><a href="#">Wrist Watch</a></h4>
                              </td>
                              <td class="item-price">
                                  <h4>$12.00</h4>
                              </td>
                              <td>
                                  In Stock
                              </td>
                              <td><a href="#" class="btn btn-default btn-lg">Add to cart</a></td>
                          </tr>
                           <tr>
                              <td class="item-thumb">
                                  <img src="images/products/p6.jpg" alt="" width="90">
                              </td>
                              <td class="item-name">
                                  <h4><a href="#">Dry Chair</a></h4>
                              </td>
                              <td class="item-price">
                                  <h4>$12.00</h4>
                              </td>
                              <td>
                                  In Stock
                              </td>
                              <td><a href="#" class="btn btn-default btn-lg">Add to cart</a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
           <div class="space-60"></div></main>
@endsection
