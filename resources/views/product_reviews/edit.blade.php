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
                        <h1 class="mt-4">Edit Product Reviews</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product Reviews / Edit</li>
                        </ol>
                        <!-- <div class="row"> -->
                        <!-- Table -->
 <div class="container-fluid py-1">
      <div class="row">
        <div class="col-12">
          <div class="card mb-6">
            <div class="card-header pb-2">
              <h6>Form Product Reviews</h6>
            </div>
            <!-- <div class="card-body px-0 pt-0 pb-2"> -->

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-2 m-4 pt-4">
                <form action="{{route('product_reviews.update', $product_reviews->id)}}" method="POST" id="productreviews">
                @method('PUT')
                @csrf
                <div class="mb-3 ms-3 me-3">
                        <label for="customer_id" class="form-label" required>Customer Id</label>
                        <br>
                        <select name="customer_id" id="customer_id" class="form-control" required>
                        @foreach ($idcustomers as $c)
                            <option value="{{ $c->id }}" @if(old('customer_id', $customers->id ?? '') == $c->id) selected @endif>{{ $c->name }}</option>
                        @endforeach
                    </select>
                        </select>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="product_id" class="form-label" required>Product Id</label>
                    <br>
                    <select name="product_id" id="product_id" class="form-control" required>
                        @foreach ($product as $p)
                            <option value="{{ $p->id }}" @if(old('product_id', $products->id ?? '') == $p->id) selected @endif>{{ $p->product_name }}</option>
                        @endforeach
                    </select>
                </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="rating"class="form-label">Ratting</label>
                        <input type="number" id="rating" name="rating" class="form-control" aria-label="rating" value="{{$product_reviews->rating ?? old('rating')}}" required>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                    <label type="text" class="form-label hidden">Comment</label>
                    <textarea rows="5" name="comment" id="comment" class="form-control" placeholder="tuliskan komentar disini" aria-label="name" required>{{ $product_reviews->comment ?? old('comment') }}</textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a href="{{ route('product_reviews.index')}}" class="btn btn-danger btn btn-outline-primar">Batal</a>
                     <button type="submit" class="btn btn-primary" id="save">Simpan</button>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
