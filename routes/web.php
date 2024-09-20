<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\DiscountCategoriesController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewsController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganFormController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\WhislistController;
use App\Http\Controllers\FormReviewController;
use App\Http\Controllers\SingleproductController;
use App\Models\Payments;
use App\Http\Controllers\OrdersFormController;
use App\Http\Controllers\WishlistFormController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WishlistLPController;
use App\Http\Controllers\CustProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransaksiController;
use App\Models\ProductCategory;
use App\Models\ProductReviews;

use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\CheckoutVwController;
use App\Http\Controllers\OdetailsIndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageEditController;
use App\Models\PageContent;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index']);

Route::resource ('pelanggan', App\Http\Controllers\PelangganFormController::class); 
Route::post('/insertdatafrmpelanggan', [PelangganFormController::class, 'insertdatafrmpelanggan'])->name('insertdatafrmpelanggan');

Route::group(['middleware' => 'auth:customers'], function () {
    // Tambahkan route yang ingin Anda lindungi di sini

    Route::resource ('landingpage', App\Http\Controllers\LandingPageController::class); 
     
    Route::resource ('custprofile', App\Http\Controllers\CustProfileController::class); 

    //Single Product
Route::get('/single-product/{id}', [SingleproductController::class, 'show']);

    Route::get('/orders/{period}/download', [OrdersController::class, 'downloadReport'])->name('orders.download');

    Route::get('/checkoutvw', [CheckoutVwController::class, 'index'])->name('checkoutvw.index');
    Route::post('/checkoutvw', [CheckoutVwController::class, 'store'])->name('checkoutvw.store');
    Route::post('/checkoutvw/storecheckout', [CheckoutVwController::class, 'storecheckout'])->name('checkoutvw.storecheckout');
    Route::post('/storecheckout', [CheckoutVwController::class, 'storecheckout'])->name('storecheckout');
    Route::post('/checkoutvw/process', 'CheckoutVwController@process')->name('checkoutvw.process');
    Route::post('/checkoutvw/process', [CheckoutVwController::class, 'process'])->name('checkoutvw.process');

    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    Route::resource ('odetailsview', App\Http\Controllers\OdetailsIndexController::class); 
    Route::get('/odetails', [OdetailsIndexController::class, 'index'])->name('odetails.index');
    Route::get('/download-receipt/{id}', [OdetailsIndexController::class, 'downloadReceipt'])->name('downloadReceipt');

    Route::resource ('productview', App\Http\Controllers\ProductViewController::class); 
    Route::get ('/product_search', [ProductViewController::class,'product_search']);
    Route::get('/cart/total-quantity', [CartController::class, 'getTotalQuantity']);
    Route::get('/products/category/{category}', [ProductViewController::class, 'showByCategory'])->name('products.category');


    // code cart
    // Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::get('/hapuscart/{id}', [CartController::class, 'hapuscart'])->name('hapuscart');
    Route::post('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::resource ('productview', App\Http\Controllers\ProductViewController::class); 

    // Route untuk menambahkan produk ke wishlist
    Route::post('/add-to-wishlist', [WishlistLPController::class, 'addToWishlist'])->name('add-to-wishlist');
    Route::resource ('wishlistlp', App\Http\Controllers\WishlistLPController::class); 
    Route::get('/wishlistlp', [WishlistLPController::class, 'index'])->name('wishlistlp.index');
    Route::get('/hapuswishlistlp/{id}', [WishlistLPController::class, 'hapuswishlistlp'])->name('hapuswishlistlp');
    Route::get('/wishlistlp/hapuswishlistlp/{id}', [WishlistLPController::class, 'hapuswishlistlp']);

    Route::resource('formreview', \App\Http\Controllers\FormReviewController::class);
    Route::post('/insertdataformreview', [FormReviewController::class, 'insertdataformreview'])->name('insertdataformreview');

    Route::resource ('checkout', App\Http\Controllers\CheckoutController::class); 
    Route::post('/insertdatacheckout', [CheckoutController::class, 'insertdatacheckout'])->name('insertdatacheckout');

    Route::resource ('beli', App\Http\Controllers\OrdersFormController::class); 
    Route::post('/insertdatafrmorders', [OrdersFormController::class, 'insertdatafrmorders'])->name('insertdatafrmorders');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource ('/dashboard', App\Http\Controllers\DashboardController::class); 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource ('dashprofile', App\Http\Controllers\DashProfileController::class); 

   // Rute resource mencakup semua operasi CRUD
Route::resource('editlp', PageEditController::class);

// Rute tambahan jika diperlukan
Route::post('/editlp/store', [PageEditController::class, 'store'])->name('editlp.store');
Route::get('/editlp/{id}/edit', [PageEditController::class, 'edit'])->name('editlp.edit');
Route::post('/editlp/{id}', [PageEditController::class, 'update'])->name('editlp.update');

Route::resource('user', UserController::class);
Route::post('/insertdata', [UserController::class, 'insertdata'])->name('insertdata');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
Route::get('/hapususer/{id}', [UserController::class, 'hapususer'])->name('hapususer');
Route::get('/user/hapususer/{id}', [UserController::class, 'hapususer']);

Route::resource('product_categories', \App\Http\Controllers\ProductCategoriesController::class);
Route::post('/insertdatapcategory', [ProductCategoriesController::class, 'insertdatapcategory'])->name('insertdatapcategory');
Route::get('/edit/{id}', [ProductCategoriesController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductCategoriesController::class, 'update'])->name('update');
Route::get('/hapuspcategory/{id}', [ProductCategoriesController::class, 'hapuspcategory'])->name('hapuspcategory');
Route::get('/product_categories/hapuspcategory/{id}', [ProductCategoriesController::class, 'hapuspcategory']);

Route::resource('discount_categories', \App\Http\Controllers\DiscountCategoriesController::class);
Route::post('/insertdatadcategory', [DiscountCategoriesController::class, 'insertdatadcategory'])->name('insertdatadcategory');
Route::get('/edit/{id}', [DiscountCategoriesController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DiscountCategoriesController::class, 'update'])->name('update');
Route::get('/hapusdcategory/{id}', [DiscountCategoriesController::class, 'hapusdcategory'])->name('hapusdcategory');
Route::get('/discount_categories/hapusdcategory/{id}', [DiscountCategoriesController::class, 'hapusdcategory']);

Route::resource('orders', \App\Http\Controllers\OrdersController::class);
Route::post('/insertdataorders', [OrdersController::class, 'insertdataorders'])->name('insertdataorders');
Route::get('/edit/{id}', [OrdersController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [OrdersController::class, 'update'])->name('update');
Route::get('/hapusorders/{id}', [OrdersController::class, 'hapusorders'])->name('hapusorders');
Route::get('/orders/hapusorders/{id}', [OrdersController::class, 'hapusorders']);
Route::get('/order/{period}', [App\Http\Controllers\OrdersController::class, 'show'])->name('order.detail');
Route::get('/orders/sales-chart', [OrdersController::class, 'salesChart'])->name('orders.sales-chart');

Route::resource('customers', \App\Http\Controllers\CustomersController::class);
Route::post('/insertdatacustomers', [CustomersController::class, 'insertdatacustomers'])->name('insertdatacustomers');
Route::get('/edit/{id}', [CustomersController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CustomersController::class, 'update'])->name('update');
Route::get('/hapuscustomers/{id}', [CustomersController::class, 'hapuscustomers'])->name('hapuscustomers');
Route::get('/customers/hapuscustomers/{id}', [CustomersController::class, 'hapuscustomers']);

Route::resource('payments', \App\Http\Controllers\PaymentsController::class);
Route::post('/insertdatapayments', [PaymentsController::class, 'insertdatapayments'])->name('insertdatapayments');
Route::get('/edit/{id}', [PaymentsController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PaymentsController::class, 'update'])->name('update');
Route::get('/hapuspayments/{id}', [PaymentsController::class, 'hapuspayments'])->name('hapuspayments');
Route::get('/payments/hapuspayments/{id}', [PaymentsController::class, 'hapuspayments']);

Route::resource('order_details', \App\Http\Controllers\OrderDetailsController::class);
Route::post('/insertdataodetails', [OrderDetailsController::class, 'insertdataodetails'])->name('insertdataodetails');
Route::get('/edit/{id}', [OrderDetailsController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [OrderDetailsController::class, 'update'])->name('update');
Route::get('/hapusodetails/{id}', [OrderDetailsController::class, 'hapusodetails'])->name('hapusodetails');
Route::get('/order_details/hapusodetails/{id}', [OrderDetailsController::class, 'hapusodetails']);


Route::resource('deliveries', \App\Http\Controllers\DeliveriesController::class);
Route::post('/insertdatadeliveries', [DeliveriesController::class, 'insertdatadeliveries'])->name('insertdatadeliveries');
Route::get('/edit/{id}', [DeliveriesController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DeliveriesController::class, 'update'])->name('update');
Route::get('/hapusdeliveries/{id}', [DeliveriesController::class, 'hapusdeliveries'])->name('hapusdeliveries');
Route::get('/deliveries/hapusdeliveries/{id}', [DeliveriesController::class, 'hapusdeliveries']);

Route::resource('product', \App\Http\Controllers\ProductController::class);
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/hapusproduct/{id}', [ProductController::class, 'hapusproduct'])->name('hapusproduct');
Route::get('/payments/hapusproduct/{id}', [ProductController::class, 'hapusproduct']);

Route::resource('discount', \App\Http\Controllers\DiscountController::class);
Route::post('/insertdatadiscount', [DiscountController::class, 'insertdatadiscount'])->name('insertdatadiscount');
Route::get('/edit/{id}', [DiscountController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DiscountController::class, 'update'])->name('update');
Route::get('/hapusdiscount/{id}', [DiscountController::class, 'hapusdiscount'])->name('hapusdiscount');
Route::get('/discount/hapusdiscount/{id}', [DiscountController::class, 'hapusdiscount']);

Route::resource('product_reviews', \App\Http\Controllers\ProductReviewsController::class);
Route::post('/insertdatapreviews', [ProductReviewsController::class, 'insertdatapreviews'])->name('insertdatapreviews');
Route::get('/edit/{id}', [ProductReviewsController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductReviewsController::class, 'update'])->name('update');
Route::get('/hapuspreviews/{id}', [ProductReviewsController::class, 'hapuspreviews'])->name('hapuspreviews');
Route::get('/product_reviews/hapuspreviews/{id}', [ProductReviewsController::class, 'hapuspreviews']);

Route::resource('whislist', \App\Http\Controllers\WhislistController::class);
Route::post('/insertdatawishlist', [WhislistController::class, 'insertdatawishlist'])->name('insertdatawishlist');
Route::get('/edit/{id}', [WhislistController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [WhislistController::class, 'update'])->name('update');
Route::get('/hapuswishlist/{id}', [WhislistController::class, 'hapuswishlist'])->name('hapuswishlist');
Route::get('/whislist/hapuswishlist/{id}', [WhislistController::class, 'hapuswishlist']);
});

Route::resource('wishlistform', \App\Http\Controllers\WishlistFormController::class);
Route::post('/insertdatawl', [WishlistFormController::class, 'insertdatawl'])->name('insertdatawl');

Route::resource ('checkoutbarang', App\Http\Controllers\StripeController::class); 

//Untuk melakukan transaksi 

// Route::resource ('bayar', App\Http\Controllers\BayarController::class); 
// Route::post('/bayaraction', [BayarController::class, 'bayaraction'])->name('bayaraction');
// Route::get('/bayar', [BayarController::class, 'bayar'])->name('bayar');

Route::resource ('bayarcheckout', App\Http\Controllers\TransaksiController::class);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route register customer
Route::get('/customer/register', [CustomerRegisterController::class, 'showRegistrationForm'])->name('register.register');
Route::post('/customer/register', [CustomerRegisterController::class, 'register'])->name('register.register.post');

// Route login customer
Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('login.login');
Route::post('/customer/login', [CustomerLoginController::class, 'login'])->name('login.login.post');

/// Logout
Route::post('/logout', function () {
    Auth::logout();
    session()->flash('status', 'Logout Berhasil');
    return redirect('/login');
})->name('logout');

// Logout Customer
Route::post('/customer/logout', function () {
    Auth::guard('customers')->logout();
    session()->flash('status', 'Logout Berhasil');
    return redirect('/');
})->name('logoutcustomer');

