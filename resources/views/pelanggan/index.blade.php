<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan Form | Asma's Bakery</title>

    <!-- Link Css -->
    <link href="{{ asset('css/stylepelanggan.css') }}" rel="stylesheet">
</head>

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<div class="modal clearfix">
    <div class="modal-product">
      <div class="product">

        <!-- Slideshow container -->
        <div class="product-slideshow">

          <!-- Full-width images with number and caption text -->
          <div class="productSlides fade">
            <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-1.png?raw=true" style="width:100%">
          </div>

          <div class="productSlides fade">
            <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-2.png?raw=true" style="width:100%">
          </div>

          <div class="productSlides fade">
            <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-3.png?raw=true" style="width:100%">
          </div>

          <div class="productSlides fade">
            <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-4.png?raw=true" style="width:100%">
          </div>

          <div class="productSlides fade">
            <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-5.png?raw=true" style="width:100%">
          </div>

          <br>

        </div>

        <img src="assets/img/logoweb.png" width="320" height="320"  />

      </div>

      <div class="round-shape"></div>
    </div>
    <div class="modal-info">
      <div class="info">
        <h2>Form Customers</h2>
        <form action="/insertdatafrmpelanggan" method="POST" id="frmUser">
        @csrf 
          <ul class="form-list">
            <li class="form-list-row">
              <div class="user">
                <label for="#">Name</label><br>
                <i class="fas fa-"></i></i><input type="text" name="name" required>
              </div>
            </li>
            <li class="form-list-row">
              <div class="email">
                <label for="#">Email Address</label><br>
                <i class="far fa-credit-"></i><input type="text" name="email" required>
              </div>
            </li>
            <li class="form-list-row">
              <div class="password">
                <label for="#">Password</label><br>
                <i class="far fa-credit-"></i><input type="password" name="password" required>
              </div>
            </li>
            <li class="form-list-row">
              <div class="phone">
                <label for="#">Phone</label><br>
                <i class="far fa-credit-"></i><input type="number" name="phone" required>
              </div>
            </li>
            <li class="form-list-row clearfix">
              <div class="date">
              <label for="#">Address 1</label><i class=""></i><br>
                <input type="text"  name="address1" required >
              </div>
              <div class="cvc">
                <label for="#">Address 2</label><i class=""></i><br>
                <input type="text" name="address2" required >
              </div>
              <div class="cvc">
                <label for="#">Address 3</label><i class=""></i><br>
                <input type="text" name="address3" required >
              </div>
            </li>
          </ul>
          <button>Save Data</button>
        </form>
      </div>
    </div>
  </div>