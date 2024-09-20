<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="/assets/img/logoweb.png" />
        <title>Dashboard Asma's Bakery</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="/styledashboard/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/dashboard">Asma's Bakery</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <!-- <li><hr class="dropdown-divider" /></li> -->
                        <a class="dropdown-item" href="/login">Logout</a>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">User Interfaces</div>
                            <a class="nav-link" href="{{ route('user.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                User
                            </a>
                            <div class="sb-sidenav-menu-heading">Categories</div>
                            <a class="nav-link" href="{{ route('product_categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Product Categories
                            </a>
                            <a class="nav-link" href="{{ route('discount_categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-percent"></i></div>
                                Discount Categories
                            </a>
                            <div class="sb-sidenav-menu-heading">Buyer</div>
                            <a class="nav-link" href="{{ route('orders.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-brands fa-jedi-order"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="{{ route('customers.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person-military-pointing"></i></div>
                                Customers
                            </a>
                            <a class="nav-link" href="{{ route('payments.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill"></i></i></div>
                                Payments
                            </a>
                            <a class="nav-link" href="{{ route('order_details.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info"></i></div>
                                Order Details
                            </a>
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link" href="{{ route('deliveries.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-truck"></i></i></i></div>
                                Deliveries
                            </a>
                            <a class="nav-link" href="{{ route('product.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-cake-candles"></i></div>
                                Product
                                <a class="nav-link" href="{{ route('discount.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></i></div>
                                Discount
                            </a>
                            <a class="nav-link" href="{{ route('product_reviews.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-note-sticky"></i></i></i></div>
                                Product Reviews
                            </a>
                            <a class="nav-link" href="{{ route('whislist.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-notes-medical"></i></i></i></div>
                                Whislist
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Asma's Bakery
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product / Edit</li>
                        </ol>
                        <!-- <div class="row"> -->
                        <!-- Table -->
 <div class="container-fluid py-1">
      <div class="row">
        <div class="col-12">
          <div class="card mb-6">
            <div class="card-header pb-2">
              <h6>Form Product</h6>
            </div>
            <!-- <div class="card-body px-0 pt-0 pb-2"> -->

            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-2 m-4 pt-4">
                <form action="{{route('product.update', $product->id)}}" method="POST" id="product" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- <div class="mb-3 ms-3 me-3">
                        <label for="product_category_id" class="form-label" required>Product Category</label>
                        <br>
                        <select name="product_category_id" id="product_category_id" class="form-control" required>
                        <option value="">-- Pilih Category Product --</option>
                            <option value="">
                                @foreach ($productCategory as $pc)
                                <option value="{{ $pc->id}}">{{$pc->category_name}}</option>
                                @endforeach
                            </option required>
                        </select>
                     </div> -->

                     <!-- Yang sudah bisa -->
                     <div class="mb-3 ms-3 me-3">
                                <label for="product_category_id" class="form-label">Product's Category</label>
                                <select class="form-select" id="product_category_id" name="product_category_id">
                                    <option disabled>Product Category List</option>
                                    @foreach ($productCategory as $pc)
                                        <option value="{{ $pc->id }}" {{ $product->product_category_id == $pc->id ? 'selected' : '' }}>{{ $pc->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="nama" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="productname" class="form-control" placeholder="masukkan nama product anda" aria-label="password"  value="{{ $product->product_name }}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="deskripsi" class="form-label hidden">Description</label>
                        <textarea rows="5" name="description" id="description" class="form-control" placeholder="tambahkan deskripsi product" aria-label="name">{{ $product->description }}</textarea>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="subtotal"class="form-label">Price</label>
                        <input type="number" id="price" name="price" class="form-control" aria-label="price"  value="{{ $product->price }}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="subtotal"class="form-label">Stock Quantity</label>
                        <input type="number" id="stok_quantity" name="stok_quantity" class="form-control" aria-label="squantity"  value="{{ $product->stok_quantity }}">
                     </div>
                     <!-- <div class="mb-3 ms-3 me-3">
                                <label for="image1_url" class="form-label">Image 1</label>
                                <img src="{{ asset('storage/' . $product->image1_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                                <input type="file" class="form-control" id="foto1" name="image1_url">
                     </div> -->
                     <div class="form-group">
                                <label for="image1_url" class="form-label">Image Example 1</label>
                                <img src="{{ asset('storage/' . $product->image1_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                                <input type="file" class="form-control" id="image1_url" name="image1_url">
                            </div>

                     <div class="mb-3 ms-3 me-3">
                                <label for="image2_url" class="form-label">Image 2</label>
                                <img src="{{ asset('storage/' . $product->image2_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                                <input type="file" class="form-control" id="foto2" name="image2_url">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                                <label for="image3_url" class="form-label">Image 3</label>
                                <img src="{{ asset('storage/' . $product->image3_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                                <input type="file" class="form-control" id="foto3" name="image3_url">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                                <label for="image4_url" class="form-label">Image 4</label>
                                <img src="{{ asset('storage/' . $product->image4_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                                <input type="file" class="form-control" id="foto4" name="image4_url">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                                <label for="image5_url" class="form-label">Image 5</label>
                                <img src="{{ asset('storage/' . $product->image5_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                                <input type="file" class="form-control" id="foto5" name="image5_url">
                     </div>
                    <div class="mb-3 ms-3 me-3">
                    <div class="col-3">
                    <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary" id="save">Save</button>
                </div>
          </div>
          </div> 

        <!-- END FORM -->

      <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
</div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Asma's Bakery</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
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

