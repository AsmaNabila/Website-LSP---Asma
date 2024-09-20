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
                        <li>
                            <a class="dropdown-item" href="/dashprofile">
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
                            <a class="nav-link" href="{{ route('editlp.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-notes-medical"></i></i></i></div>
                                Landing Page
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
                    <h1 class="mt-4">Welcome to Dashboard Asma's Bakery!</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                 
                    <div class="row">

    <!-- Button Unduh Data  -->
    <h4 class="mt-4">Here to Downloads The Recap Data</h4>
    <div class="left-align-btn">
        <a href="{{ route('orders.download', ['period' => 'daily']) }}" class="btn btn-success btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Daily Report
        </a>
        <a href="{{ route('orders.download', ['period' => 'weekly']) }}" class="btn btn-success btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Weekly Report
        </a>
        <a href="{{ route('orders.download', ['period' => 'monthly']) }}" class="btn btn-success btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Monthly Report
        </a>
        <a href="{{ route('orders.download', ['period' => 'annual']) }}" class="btn btn-success btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Annual Report
        </a>
    </div>

    <section>
        <br>
    </section>

<!-- Daily Earnings Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Earnings (Daily)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ $dailyEarnings }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                </div>
            </div>
            <br>
            <div class="text-center">
            <a href="{{ route('order.detail', ['period' => 'daily']) }}" class="btn btn-primary">Detail Laporan</a>
            </div>
        </div>
    </div>
</div>

<!-- Weekly Earnings Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Earnings (Weekly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ $weeklyEarnings }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar-week fa-2x text-gray-300"></i>
                </div>
            </div>
            <br>
            <div class="text-center">
            <a href="{{ route('order.detail', ['period' => 'weekly']) }}" class="btn btn-primary">Detail Laporan</a>
            </div>
        </div>
    </div>
</div>

<!-- Monthly Earnings Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Earnings (Monthly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ $monthlyEarnings }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                </div>
            </div>
            <br>
            <div class="text-center">
            <a href="{{ route('order.detail', ['period' => 'weekly']) }}" class="btn btn-primary">Detail Laporan</a>
            </div>
          </div>
    </div>
</div>

<!-- Annual Earnings Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Earnings (Annual)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ $annualEarnings }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
            <br>
        <div class="text-center">
            <a href="{{ route('order.detail', ['period' => 'annual']) }}" class="btn btn-primary">Detail Laporan</a>
        </div>
    </div>
</div>
            </main>

            <div class="row">
    <div class="col-xl-6 col-md-12 mb-4">
        <div class="card shadow h-100">
            <div class="card-header">
                <h6 class="font-weight-bold text-primary">Earnings Breakdown</h6>
            </div>
            <div class="card-body">
                <canvas id="earningsPieChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-12 mb-4">
        <div class="card shadow h-100">
            <div class="card-header">
                <h6 class="font-weight-bold text-primary">Earnings Over Time</h6>
            </div>
            <div class="card-body">
                <canvas id="earningsLineChart"></canvas>
            </div>
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
            </div>
        </div>
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

<<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data dari server
            const salesData = {!! json_encode(array_values($salesData)) !!};
            const monthNumbers = {!! json_encode(array_keys($salesData)) !!};
            const labels = monthNumbers.map(month => new Date(0, month - 1).toLocaleString('default', { month: 'long' }));

            // Data for pie chart
            const pieData = {
                labels: labels,
                datasets: [{
                    data: salesData,
                    backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
                    hoverBackgroundColor: ['#0056b3', '#a71d2a', '#d39e00'],
                }]
            };

            // Data for line chart
            const lineData = {
                labels: labels,
                datasets: [{
                    label: 'Earnings',
                    data: salesData,
                    borderColor: '#007bff',
                    fill: false,
                }]
            };

            // Config for pie chart
            const pieConfig = {
                type: 'pie',
                data: pieData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Earnings Breakdown'
                        }
                    }
                }
            };

            // Config for line chart
            const lineConfig = {
                type: 'line',
                data: lineData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Earnings Over Time'
                        }
                    }
                }
            };

            // Render charts
            const ctxPie = document.getElementById('earningsPieChart').getContext('2d');
            const ctxLine = document.getElementById('earningsLineChart').getContext('2d');
            new Chart(ctxPie, pieConfig);
            new Chart(ctxLine, lineConfig);
        });
    </script>

</html>

</html>

