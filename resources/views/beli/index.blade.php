<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Form | Asma's Bakery</title>

    <!-- Link Css -->
    <link href="{{ asset('css/stylecc.css') }}" rel="stylesheet">
    
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
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
        <h2>Form Pembelian</h2>
        <form action="/insertdatafrmorders" method="POST" id="frmUser">
        @csrf 
          <ul class="form-list">
            <li class="form-list-row">
              <div class="user">
                <label for="customer_id" class="form-label">Customer Id</label>
                <br>
                <i class="far fa-user"></i>
                <select name="customer_id" id="customer_id" class="form-control" required>
                    <option value="">Select Customer</option>
                    @foreach ($idcustomers as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
              </div>
            </li>
            <li class="form-list-row">
              <div class="email">
                <label for="order_date">Order Date</label><br>
                <i class="far fa-calendar-alt"></i><input type="date" name="order_date" id="order_date" required>
              </div>
            </li>
            <li class="form-list-row">
              <div class="total_amount">
                <label for="total_amount">Total Amount</label><br>
                <i class="far fa-money-bill-alt"></i><input type="number" name="total_amount" id="total_amount" required>
              </div>
            </li>
            <li class="form-list-row">
              <div class="status">
                <label for="status">Status</label><br>
                <i class="far fa-credit-card"></i><input type="text" name="status" id="status" required>
              </div>
            </li>
          </ul>
          <button type="submit">Save Data</button>
        </form>
      </div>
    </div>
  </div>

<!-- Include JavaScript files if necessary -->
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
