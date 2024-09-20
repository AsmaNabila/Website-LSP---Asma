<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="assets/img/logoweb.png" />
    <title>Dashboard Asma's Bakery</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="/styledashboard/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
            .btn-custom {
                width: 100%;
                margin-bottom: 10px;
            }

            .btn-group-custom {
                display: flex;
                justify-content: space-between;
            }

            .btn-group-custom .btn {
                flex: 1;
                margin-right: 10px;
            }

            .btn-group-custom .btn:last-child {
                margin-right: 0;
            }

            .btn-group-custom .btn {
                width: 100%;
            }

            .sidebar {
                position: fixed;
                right: 0;
                top: 0;
                width: 300px;
                height: 100%;
                background-color: white;
                box-shadow: -2px 0 5px rgba(0,0,0,0.1);
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
                z-index: 1000;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .cart-item-list {
                padding: 20px;
                list-style-type: none;
            }

            .cart-item-list li {
                margin-bottom: 10px;
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
            }

            .btn-danger {
                margin-top: 10px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 1rem;
                background-color: transparent;
                border-collapse: collapse;
            }

            .table th,
            .table td {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
            }

            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #dee2e6;
            }

            .table tbody + tbody {
                border-top: 2px solid #dee2e6;
            }

            .table .table {
                background-color: #fff;
            }

            .input-group .form-control {
                width: 20px;
                height: 40px;
                text-align: center;
            }

            .input-group-prepend .btn,
            .input-group-append .btn {
                height: 50px;
            }

            .input-group-prepend .btn,
            .input-group-append .btn {
                display: none;
            }

            /* Custom Styles */
            .customer-info {
                text-align: left;
                font-size: 1.1em;
                margin: 0 auto;
                max-width: 600px;
            }

            .customer-info p {
                margin-bottom: 15px;
            }

            /* Center section content */
            .page-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .section-heading {
                font-size: 2em;
            }

            .section-subheading {
                font-size: 1.2em;
            }
        </style>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="/dashboard">Asma's Bakery</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            {{ Auth::user()->name }} - {{ Auth::user()->roles }}
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="/">Home</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
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
                        </a>
                        <a class="nav-link" href="{{ route('discount.index')}}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></div>
                            Discount
                        </a>
                        <a class="nav-link" href="{{ route('product_reviews.index')}}">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-note-sticky"></i></div>
                            Product Reviews
                        </a>
                        <a class="nav-link" href="{{ route('whislist.index')}}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-notes-medical"></i></div>
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
        <div class="container-fluid px-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mt-4">Profile Details</h1>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-2 text-center"> <!-- Tambahkan kelas text-center di sini -->
            <i class="fas fa-user fa-5x me-2"></i>
        </div>
        <div class="col-md-10 align-self-center">
            <div class="customer-info">
                <p><strong>Name     :</strong> {{ $user->name }}</p>
                <p><strong>Emai     :</strong> {{ $user->email }}</p>
                <p><strong>Tingkat  :</strong> {{ $user->roles }}</p>
            </div>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-6">
            <a href="/dashboard" type="button" class="btn btn-info"><i class="fas fa-arrow-left me-2"></i>Kembali Ke Halaman Home</a>
        </div>
    </div>
</div>


<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Asma's Bakery</div>
        </div>
    </div>
</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
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
            swal("Good Job!", psn.value, "success")
    } {
        body.onload = function() {
            pesan_simpan()
        }
    }
</script>

</html>

</html>

