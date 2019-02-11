<?php



#Shop
Route::prefix('shop')->group(function () {
  Route::name('shop')->get('/', 'ShopController@categories');
  Route::name('order-now')->get('order-now', 'ShopController@orderNow');
  Route::name('remove-item')->get('remove-item', 'ShopController@removeItem');
  Route::name('clear-cart')->get('clear-cart', 'ShopController@clearCart');
  Route::name('update-cart')->get('update-cart', 'ShopController@updateCart');
  Route::name('checkout')->get('checkout', 'ShopController@checkout');
  Route::name('add-to-cart')->get('add-to-cart', 'ShopController@addToCart');
  Route::name('products')->get('{curl}', 'ShopController@products');
  Route::name('item')->get('{curl}/{p_url}', 'ShopController@item');

});

#User
Route::prefix('user')->group(function () {
Route::name('signin')->get('signin', 'UserController@getSignin');
Route::name('sginin')->post('signin', 'UserController@postSignin');
Route::name('signup')->get('signup', 'UserController@getSignup');
Route::name('signup')->post('signup', 'UserController@postSignup');
Route::name('logout')->get('logout', 'UserController@logout');

});

#Cms
Route::middleware(['adminguard'])->group(function () {
  Route::prefix('cms')->group(function () {
   Route::get('dashboard', 'CmsController@dashboard');
   Route::resource('menu', 'MenuController');
   Route::resource('content', 'ContentController');
   Route::resource('categories', 'CategoriesController');
   Route::resource('products', 'ProductsController');
   Route::get('orders', 'CmsController@orders');

  });
});

#Page
Route::name('home')->get('/', 'PagesController@home');
Route::name('wishlist')->get('wishlist', 'PagesController@wishlist');
Route::name('content')->get('{url}', 'PagesController@content');
