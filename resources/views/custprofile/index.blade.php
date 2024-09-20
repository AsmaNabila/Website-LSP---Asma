<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko Kue | Asma's Bakery</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

        <!-- Icons and CSS -->
        <link rel="icon" type="image/x-icon" href="assets/img/logoweb.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- Alpine JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- FontAwesome -->
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
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logoweb.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto me-3 me-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Masthead</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/productview">Menu's</a></li>
                        <li class="nav-item"><a class="nav-link" href="/wishlistlp">Wishlist</a></li>
                        <li class="nav-item"><a class="nav-link" href="/formreview">Form Review</a></li>
                        <li class="nav-item"><a class="nav-link" href="/odetailsview">Order Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="/customer/login">Login</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart" id="cartIcon">
                                <i class="bi bi-cart-fill"></i>
                                Cart
                            </a>
                        </li>
                         <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @auth
                            <li>
                            <a class="dropdown-item" href="{{ route('custprofile.index', ['customerId' => Auth::id()]) }}">
                                    {{ Auth::user()->name }} - Customers
                                </a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <form action="{{ route('logoutcustomer') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="/customer/login">Login</a></li>
                            <!-- Jika Anda memiliki rute untuk registrasi, tambahkan linknya di sini -->
                            <!-- <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li> -->
                        @endauth
                    </ul>
                </li>
            </div>
        </nav>
        <!-- Masthead -->
        <header class="masthead">
            <div class="container"></div>
        </header>

        <!-- About Section -->
        <section class="page-section" id="tentang">
            <div class="container text-center">
                <div>
                    <h2 class="section-heading text-uppercase">Customer Profile</h2>
                    <h3 class="section-subheading text-muted">Berikut ini adalah data dari customer, dimohon untuk menghubungi admin apabila terjadi kesalahan data</h3>
                </div>
                <div class="customer-info d-flex align-items-start"> <!-- Menggunakan d-flex dan align-items-start untuk fleksbox -->
                <i class="fas fa-user fa-3x me-2 align-self-center"></i> <!-- Icon Profil -->
                <div class="customer-info">
                    <p><strong>Name:</strong> {{ $customer->name }}</p>
                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                    <p><strong>Phone:</strong> {{ $customer->phone }}</p>
                    <p><strong>Address 1:</strong> {{ $customer->address1 }}</p>
                    <p><strong>Address 2:</strong> {{ $customer->address2 }}</p>
                    <p><strong>Address 3:</strong> {{ $customer->address3 }}</p>
                </div>
            </div>
            <a href="/productview" type="button" class="btn btn-info">Kembali Ke Halaman Menu</a>
            </div>
        </section>

        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; AsmaNabila 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/asmanbla?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://wa.link/nr4xkp" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Additional scripts for notifications and alerts -->
        <input type="hidden" id="sts" class="form-control" value="@isset($status){{ $status }}@endisset" />
        <input type="hidden" id="psn" class="form-control" value="@isset($status){{ $pesan }}@endisset" />
        <script>
            const sts = document.getElementById("sts");
            const psn = document.getElementById("psn");

            function pesan_simpan() {
                if (sts.value === "simpan")
                    swal("Good Job!", psn.value, "success");
            }

            body.onload = function() {
                pesan_simpan();
            }
        </script>
    </body>
</html>
