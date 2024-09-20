<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment | Asma's Bakery</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/img/logoweb.png" />

<body>
    <div class="container">
        <div class="row">
            <h1>Payment Stripe</h1>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Payment Stripe Gateway
                    </div>
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <table class="table table-hover table-bordered" id="users">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Product Category Id</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Foto 1</th>
                                        <th>Foto 2</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($product as $idx => $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{ $idx + 1 . '. ' }}
                                                </div>
                                            </td>
                                            <td>
                                                {{ $data->product_category_id }}
                                            </td>
                                            <td>
                                                {{ $data->product_name }}
                                            </td>
                                            <td>
                                                {{ $data->description }}
                                            </td>
                                            <td>
                                                {{ $data->price }}
                                            </td>
                                            <td data-th="Quantity">
                                                <input type="number" value="1" class="form-control quantity cart-update" id="quantity_{{ $idx }}" data-price="{{ $data->price }} " />
                                            </td>
                                            <td>
                                                <img src="storage/{{ $data->image1_url }}" class="img-thumbnail" style="width: 500px; height: 200px;">
                                            </td>
                                            <td>
                                                <img src="storage/{{ $data->image2_url }}" class="img-thumbnail" style="width: 500px; height: 200px;">
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align:right;">
                                        <h3><strong>Total 
                                            <span id="total">{{ $total }}</span>
                                        </strong></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:right;">
                                            <form action="" method="POST">
                                                @csrf
                                                <a href="/" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Batalkan Checkout</a>
                                                <input type="hidden" name="total" value="0">
                                                <input type="hidden" name="product_name" value="{{ $data->product_name }}">
                                                <a href="/bayarcheckout" class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</a>
                                            </form>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var quantities = document.querySelectorAll(".quantity");

            function updateTotal() {
                var total = 0;
                quantities.forEach(function(quantity) {
                    var price = parseFloat(quantity.dataset.price);
                    var quantityValue = parseInt(quantity.value);
                    if (!isNaN(price) && !isNaN(quantityValue)) {
                        total += price * quantityValue;
                    }
                });
                document.getElementById("total").textContent = total.toFixed(2);
            }

            quantities.forEach(function(quantity) {
                quantity.addEventListener("change", updateTotal);
            });

            updateTotal();
        });
    </script>

</body>

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
            swal("Good Job!", psn.value, "pesan")
    } {
        body.onload = function() {
            pesan_simpan()
        }
    }
</script>

</html>
