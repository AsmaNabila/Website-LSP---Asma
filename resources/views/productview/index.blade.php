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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
    <!-- Feather Icons  -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My style -->
    <link rel="stylesheet" href="{{ ('css/styles.css') }}" />
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logoweb.png" />
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
        .search-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.search-form {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
}

.search-input {
    width: 400px;
    padding: 10px;
    border: none;
    outline: none;
}

.search-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
}

.search-button:hover {
    background-color: #0056b3;
}

/* Optional: Font Awesome icon styling */
.search-button i {
    font-size: 18px;
}

.product-card {
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

    </style>

<style>
    .btn-pink {
        color: #fff;
        background-color: #e83e8c;
        border-color: #e83e8c;
        border-radius: 30px; /* Untuk melengkungkan sudut tombol */
        padding: 10px 20px; /* Untuk memberikan ruang yang sesuai */
        font-size: 18px; /* Ukuran font */
    }
    .btn-pink:hover {
        background-color: #c5326b; /* Warna yang berbeda saat hover */
        border-color: #c5326b;
    }
</style>

</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <!-- Logo Website -->
            <a class="navbar-brand" href="#page-top"><img src="assets/img/logoweb.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Masthead</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/productview">Menu's</a></li>
                    <li class="nav-item"><a class="nav-link" href="/wishlistlp">Wishlist</a></li>
                    <li class="nav-item"><a class="nav-link" href="/formreview">Form Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="/odetailsview">Order Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login Admin</a></li>
                    <!-- Tambahkan ikon keranjang di sini -->
                    <li class="nav-item">
                    <a class="nav-link" href="/cart" id="cartIcon">
                        <i class="bi bi-cart-fill"></i> <!-- Menggunakan ikon keranjang dari Bootstrap Icons -->
                        Cart
                    </a>
                </li>
                    <!-- Akhir dari penambahan ikon keranjang -->
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
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">About Our Service?</a> -->
        </div>
    </header>
    <!-- Product View Section -->
    <section class="page-section" id="productview">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Product Update</h2>
                <h3 class="section-subheading text-muted">Berikut adalah Product Terupdate pada Website kami.</h3>
            </div>

        <!-- Search Product -->

            <div class="search-container">
                <form action="{{ url('product_search') }}" method="GET" class="search-form">
                    <input class="search-input" type="text" name="search" placeholder="Search Products Here">
                    <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <br>
        <br>

            <!-- start logic for showing product -->
            @if ($products->isNotEmpty())
    <div class="row">
        @for ($i = 0; $i < 10 && $i < count($products); $i++)
            @php
                $product = $products[$i];
            @endphp                            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 product-card">
                <a href="/single-product/{{ $product->id }}">
                            <div class="product-img-container">
                                <img class="card-img-top" src="{{ asset('storage/' . $product->image1_url) }}" style="width: 415px; height: 450px;" alt="{{ $product->product_name }}">
                            </div>
                        </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/productview">{{ $product->product_name }}</a>
                        </h5>
                        <p class="card-text">
                            @if ($product->discounts->isNotEmpty())
                                @foreach ($product->discounts as $discount)
                                    <span class="badge bg-danger">{{ $discount->percentage }}% Off</span>
                                    <del class="text-muted">Rp{{ number_format($product->price, 0) }}</del>
                                    <span class="discounted-price">Rp{{ number_format($product->price - ($product->price * $discount->percentage / 100), 0) }}</span>
                                @endforeach
                            @else
                                <span class="price">Rp{{ number_format($product->price, 0) }}</span>
                            @endif
                        </p>
                        <div class="d-flex justify-content-start align-items-center mb-3">
    <!-- Pesan Via Online button -->
    <a class="btn btn-success me-2" href="https://wa.link/nr4xkp" target='_blank'>Pesan Via Online</a>
    
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
    
    <!-- Single Product button -->
    <a href="/single-product/{{ $product->id }}" class="btn btn-info">
                                <i class="bi bi-eye"></i>
                            </a>
</div>

                    </div>
                </div>
            </div>
        @endfor
    </div>
@else
    <p>No products found</p>
@endif
        </div>
    </section>
    <!-- Footer-->
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

    <script>
// Fungsi untuk memperbarui jumlah item di ikon keranjang
function updateCartIcon(count) {
    const cartIcon = document.getElementById('cartIcon');
    cartIcon.innerHTML = `<i class="bi bi-cart-fill"></i> Cart (${count})`;
}

// Tambahkan event listener untuk setiap tombol "Add to Cart"
addToCartBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        addToCart();
        currentCount++; // Tambah 1 ke jumlah saat ini
        updateCartIcon(currentCount); // Perbarui teks pada ikon keranjang
    });
});

// Tambahkan event listener untuk tombol "Remove from Cart"
removeFromCartBtn.addEventListener('click', () => {
    removeFromCart();
    currentCount--; // Kurangi 1 dari jumlah saat ini
    updateCartIcon(currentCount); // Perbarui teks pada ikon keranjang
});

// Panggil fungsi updateCartIcon() saat halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    // Hitung total jumlah item saat halaman dimuat
    let totalItems = 0;
    document.querySelectorAll('.quantity').forEach(input => {
        totalItems += parseInt(input.value);
    });
    currentCount = totalItems; // Set jumlah saat ini sesuai dengan total item di keranjang
    updateCartIcon(currentCount); // Perbarui teks pada ikon keranjang
});
</script>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
        // Ambil elemen yang diperlukan
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

        document.addEventListener("DOMContentLoaded", function() {
            // Function to save cart items in localStorage
            function saveCartItems(cartItems) {
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
            }

            // Function to get cart items from localStorage
            function getCartItems() {
                return JSON.parse(localStorage.getItem('cartItems')) || [];
            }

            // Function to add item to cart
            function addItemToCart(productId) {
                var cartItems = getCartItems();
                if (!cartItems.includes(productId)) {
                    cartItems.push(productId);
                    saveCartItems(cartItems);
                }
            }

            // Add event listeners to "Add to Cart" buttons
            var addToCartButtons = document.querySelectorAll('.addToCartBtn');
            addToCartButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var productId = button.dataset.productId;
                    addItemToCart(productId);
                    alert('Product added to cart!');
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var addToCartButtons = document.querySelectorAll('.addToCartBtn');
            addToCartButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var productId = button.dataset.productId;
                    addToCart(productId);
                });
            });

            function addToCart(productId) {
                var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                if (!cartItems.includes(productId)) {
                    cartItems.push(productId);
                }
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                alert('Product added to cart');
            }
        });
    </script>

<script>
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');

    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        if (query.length > 0) {
            // Send search request to server
            fetch(`/search?q=${query}`)
                .then(response => response.json())
                .then(data => {
                    // Handle search results, for example, display them in a dropdown
                    console.log('Search results:', data);
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        } else {
            // Clear search results or hide them
            console.log('Search query is empty');
        }
    });
</script>

</body>
</html>

