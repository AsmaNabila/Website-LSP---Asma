<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist Page | Asma's Bakery</title>
    <!-- Link Css -->
    <link href="{{ asset('css/styleorders.css') }}" rel="stylesheet">

    <!-- Alpine JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logoweb.png" />
</head>
<body>
<div class="product-container">
  <div class="image">
    <img src="assets/img/logoweb.png" alt="" border="0" />
  </div>
  <div class="details">
    <h4 class="title">Data Favorite yang anda inputkan akan</h4>
    <h3 class="title">sangat bermanfaat untuk kami kedepannya</h4>
    <h3 class="title">Terimakasih</h3>
  </div>
</div>

<form action="/insertdatawl" method="POST" id="frmOrders">
    @csrf 
    <div class="card-container">
        <div class="card-details">
    <div class="card-number field">
      <label for="cn">Pilih Nama Anda</label>
      <input id="customer_id" type="text" name="customer_id" />
      <select name="customer_id" id="customer_id" class="form-control" required>
          <option value="">
              @foreach ($customer as $c)
                  <option value="{{ $c->id}}">{{$c->name}}</option>
              @endforeach
          </option required>
      </input>
      </select>
    </div>
    <div class="card-name field">
      <label for="cna">Pilih Product Yang Ingin Dijadikan Wishlist</label>
      <input id="product_id" type="text" name="product_id"/>
      <select name="product_id" id="product_id" class="form-control" required>
          <option value="">
              @foreach ($product as $p)
                  <option value="{{ $p->id}}">{{$p->product_name}}</option>
              @endforeach
          </option required>
      </input>
      </select>
    </div>
  </div>
  <button class="purchase-button" data-content="Simpan Data">Simpan Data</button>
</div>
</form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    @include('sweetalert::alert')
</body>
<input type="hidden" id="sts" class="form-control"
    value="@isset($status){{ $status }}@endisset" />
<input type="hidden" id="psn" class="form-control"
    value="@isset($status){{ $pesan }}@endisset" />
<script>
    const sts = document.getElementById("sts")
    const psn = document.getElementById("psn")

    function pesan_simpan() {
        if (sts.value === "simpan")
            swal("Good Job!", psn.value, "success")
    } {
        body.onload = function() {
            pesan_simpan()
        }
    }
</script>

</html>