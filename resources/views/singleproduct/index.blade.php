<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko Kue | Asma's Bakery</title>
        <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Swipper JS -->
   
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Feather Icons  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->

    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/styleproductdetails.css" />

    <!-- Alpine JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/logoweb.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ ('css/styles.css')}}" rel="stylesheet" />

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .product-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-images {
            flex: 1;
            overflow-x: auto;
            white-space: nowrap;
        }
        .product-images img {
            width: 100%; /* Lebar gambar 100% */
            height: 100%; /* Tinggi gambar 100% */
            object-fit: cover; /* Gambar akan mengisi kotak tanpa mempertahankan aspek rasio */
        }
        .product-info {
            flex: 1;
            text-align: left;
        }

        .fa-star {
            color: gold;
        }

    </style>
</head>

<!-- Masthead-->

<body>
<header class="masthead">
            <div class="container">
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">About Our Service?</a> -->
            </div>
        </header>

        <!-- Masthead-->
       <section class="page-section" id="tentang">
            <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">Single Product</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah details Products</h3>
                </div>
            </div>

<body id="page-top">
    <!-- Navigation -->
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!-- Logo Website -->
                <a class="navbar-brand" href="#page-top"><img src="../assets/img/logoweb.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Masthead</a></li>
                        <li class="nav-item"><a class="nav-link" href="/"> About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/productview"> Menu's</a></li>
                        <li class="nav-item"><a class="nav-link" href="/"> History</a></li>
                        <li class="nav-item"><a class="nav-link" href="/wishlistlp">Wishlist</a></li>
                        <li class="nav-item"><a class="nav-link" href="/formreview">Form Review</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login Admin</a></li>
                         <!-- Tambahkan ikon keranjang di sini -->
                        <li class="nav-item">
                            <a class="nav-link" href="/cart" id="cartIcon">
                                <i class="bi-cart-fill"></i> <!-- Menggunakan ikon keranjang dari Bootstrap Icons -->
                                Cart
                                <!-- <span class="badge bg-light text-black ms-1 rounded-pill" id="cartItemCount">0</span> Ubah angka sesuai dengan jumlah barang pada keranjang -->
                            </a>
                        </li>
                        <!-- Akhir dari penambahan ikon keranjang -->

                        <!-- Sidebar list barang -->
                        <div id="sidebar" class="sidebar">
                            <ul id="cartItemList" class="cart-item-list">
                                <!-- List barang akan ditambahkan di sini secara dinamis menggunakan JavaScript -->
                            </ul>
                        </div>
                        <!-- Tambahkan tombol untuk mengurangi jumlah barang -->
                        <!-- <li class="nav-item">
                            <button class="btn btn-danger" id="removeFromCartBtn">
                                <i class="bi bi-dash"></i> Ikon pengurangan dari Bootstrap Icons
                            </button>
                        </li> -->
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
            </div>
        </nav>

    <!-- Single Product -->
    <body>
    <div class="container">
        <div class="product-detail">
            <div class="product-images">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @if($product->image1_url)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $product->image1_url) }}" alt="{{ $product->product_name }}" style="width: 500px; height: 535px;" class="product-image">
                            </div>
                        @endif
                        @if($product->image2_url)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $product->image2_url) }}" alt="{{ $product->product_name }}" style="width: 500px; height: 535px;" class="product-image">
                            </div>
                        @endif
                        @if($product->image3_url)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $product->image3_url) }}" alt="{{ $product->product_name }}" style="width: 500px; height: 535px;" class="product-image">
                            </div>
                        @endif
                        @if($product->image4_url)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $product->image4_url) }}" alt="{{ $product->product_name }}" style="width: 500px; height: 535px;" class="product-image">
                            </div>
                        @endif
                        @if($product->image5_url)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $product->image5_url) }}" alt="{{ $product->product_name }}" style="width: 500px; height: 535px;" class="product-image">
                            </div>
                        @endif
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="product-info">
                <h1>{{ $product->product_name }}</h1>
                <p>{{ $product->description }}</p>
                <p class="card-text">
                                @if ($product->discounts->isNotEmpty())
                                    @foreach ($product->discounts as $discount)
                                        <span class="badge bg-danger">{{ $discount->percentage}}% Off</span>
                                        <del class="text-muted">Rp{{ $product->price, 0 }}</del>
                                        <span class="discounted-price">Rp{{ $product->price - ($product->price * $discount->percentage /100), 0}}</span>
                                    @endforeach
                                @else
                                  <span class="price">Price : Rp{{ number_format($product->price, 0) }}</span>
                                @endif
                            </p>
                <p>Stock: {{ $product->stok_quantity }}</p>
                <div class="d-flex justify-content-start align-items-center mb-3">
    <!-- Pesan Via Online button -->
    <a class="btn btn-success me-2" href="https://wa.link/nr4xkp">Pesan Via Online</a>
    
    <!-- Tombol tambah ke keranjang -->
    <form action="{{ route('cart.addToCart', $product->id) }}" method="POST" class="d-inline me-2">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button type="submit" class="btn btn-warning">
            <i class="bi bi-cart-fill"></i>
        </button>
    </form>
    
    <!-- Tombol tambah ke wishlist -->
    <form method="post" action="{{ route('add-to-wishlist') }}" class="d-inline me-2">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-heart"></i>
        </button>
    </form>
    
    <!-- Refresh button -->
    <a href="/productview" class="btn btn-info d-inline me-2">
        <i class="fas fa-redo"></i>
    </a>
</div>

            </div>
        </div>
    </div>
    
    <br>
    <!-- End Single Product -->

    <!-- Product Reviews -->
    <section class="page-section" id="productview">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Product Reviews</h2>
            <h3 class="section-subheading text-muted">Berikut adalah Review Product Ini</h3>
        </div>
        @foreach($product->reviews as $review)
            <div class="review">
                <p><strong>{{ $review->customer->name }}</strong></p>
                <p>
                    @for ($i = 1; $i <= 10; $i++)
                        @if ($i <= $review->rating)
                            <i class="fas fa-star"></i>
                        @else
                            <i class="far fa-star"></i> 
                        @endif 
                    @endfor
                </p>
                <p>{{ $review->comment }}</p>
            </div>
            @if (!$loop->last)
                <hr>
            @endif
        @endforeach
    </div>
</section>


    <script src="{{ asset('../js/scripts.js') }}"></script>

    <!-- Footer -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    @include('sweetalert::alert')
    <!-- JavaScript Button -->
    <script>
        /// Ambil elemen yang diperlukan
        const cartItemCountElement = document.getElementById('cartItemCount');
        const addToCartBtns = document.querySelectorAll('.addToCartBtn');
        const removeFromCartBtn = document.getElementById('removeFromCartBtn');

        // Mendapatkan nilai jumlah barang dari penyimpanan lokal saat halaman dimuat
        let currentCount = localStorage.getItem('cartItemCount');
        if (!currentCount) {
            currentCount = 0;
        }
        cartItemCountElement.innerText = currentCount;

        // Fungsi untuk menambahkan item ke keranjang
        function addToCart() {
            // Tambahkan 1 ke nilai saat ini
            currentCount++;
            // Update teks badge dengan nilai yang baru
            cartItemCountElement.innerText = currentCount;
            // Simpan nilai jumlah barang ke penyimpanan lokal
            localStorage.setItem('cartItemCount', currentCount);

            // Tampilkan notifikasi
            showNotification("Barang berhasil ditambahkan ke keranjang");
        }

        // Fungsi untuk mengurangi item dari keranjang
        function removeFromCart() {
            // Pastikan nilai tidak negatif
            if (currentCount > 0) {
                // Kurangi 1 dari nilai saat ini
                currentCount--;
                // Update teks badge dengan nilai yang baru
                cartItemCountElement.innerText = currentCount;
                // Simpan nilai jumlah barang ke penyimpanan lokal
                localStorage.setItem('cartItemCount', currentCount);
            }
        }

        // Tambahkan event listener untuk setiap tombol "Add to Cart"
        addToCartBtns.forEach(btn => {
            btn.addEventListener('click', addToCart);
        });

        // Tambahkan event listener untuk tombol "Remove from Cart"
        removeFromCartBtn.addEventListener('click', removeFromCart);

        // Fungsi untuk menampilkan notifikasi
        function showNotification(message) {
            // Buat elemen notifikasi
            const notification = document.createElement('div');
            notification.classList.add('notification');
            notification.textContent = message;

            // Tambahkan notifikasi ke dalam dokumen
            document.body.appendChild(notification);

            // Hapus notifikasi setelah beberapa detik
            setTimeout(() => {
                notification.remove();
            }, 3000); // Hapus notifikasi setelah 3 detik (3000 milidetik)
        }
    </script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            spaceBetween: 10,
            slidesPerView: 1,
        });
    </script>
    <script src="{{ asset('../js/scripts.js') }}"></script>
</body>
</body>
</html>
