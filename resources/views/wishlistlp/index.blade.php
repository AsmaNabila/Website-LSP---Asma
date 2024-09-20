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
<style>
    .table-hover tbody tr:hover img {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Bayangan berwarna hitam saat disorot */
    transition: box-shadow 0.3s ease; /* Efek transisi saat bayangan muncul */
}

.product-image {
        width: 300px; /* Lebar gambar */
        height: 300px; /* Tinggi gambar */
        /* Tambahkan gaya animasi ketika disorot */
        transition: transform 0.2s ease-in-out;
    }

    /* Definisikan efek animasi ketika disorot */
    .product-image:hover {
        transform: scale(1.05); /* Ubah skala gambar saat disorot */
    }
</style>

    <!-- Feather Icons  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Alpine JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- My style -->

    <link rel="stylesheet" href="{{ ('css/style.css') }}" />

    <!-- Alpine JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
        <link href="css/styles.css" rel="stylesheet" />
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
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Masthead</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/productview">Menu's</a></li>
                    <li class="nav-item"><a class="nav-link" href="/wishlistlp">Wishlist</a></li>
                    <li class="nav-item"><a class="nav-link" href="/formreview">Form Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="/odetailsview">Order Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login Admin</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart" id="cartIcon">
                        <i class="bi bi-cart-fill"></i> <!-- Menggunakan ikon keranjang dari Bootstrap Icons -->
                        Cart
                    </a>
                </li>
            </form>
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
    </div>
</nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">About Our Service?</a> -->
            </div>
        </header>

        <!-- Wishlist Section -->
        <section class="page-section" id="wishlist">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">WishList</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah Product Favorite Anda</h3>
                </div>
                <table class="table table-hover table-bordered table-stripped" id="whislist">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($wishlistProducts as $idx => $wishlistProduct)
        <tr>
            <td>{{ $idx + 1 }}</td>
            <td>{{ $wishlistProduct->product->product_name ?? 'Product Not Found' }}</td>
            <td>
                @if($wishlistProduct->product && $wishlistProduct->product->image1_url)
                    <a href="/single-product/{{ $wishlistProduct->product->id }}">
                        <img src="{{ asset('storage/' . $wishlistProduct->product->image1_url) }}"
                            alt="{{ $wishlistProduct->product->product_name }}" style="width: 300px; height: 300px;" class="product-image">
                    </a>
                @else
                    <span>No Image</span>
                @endif
            </td>
            <td>
                <p class="card-text">
                    @if ($wishlistProduct->product->discounts->isNotEmpty())
                        @foreach ($wishlistProduct->product->discounts as $discount)
                            <span class="badge bg-danger">{{ $discount->percentage }}% Off</span>
                            <del class="text-muted">Rp{{ number_format($wishlistProduct->product->price, 0) }}</del>
                            <span class="discounted-price">Rp{{ number_format($wishlistProduct->product->price - ($wishlistProduct->product->price * $discount->percentage / 100), 0) }}</span>
                        @endforeach
                    @else
                        <span class="price">Rp{{ number_format($wishlistProduct->product->price, 0) }}</span>
                    @endif
                </p>
            </td>
            <td>
                <a href="/hapuswishlistlp/{{$wishlistProduct->id}}" class="btn btn-danger btn btn-outline-primary btn-sm">Hapus</a>
                <!-- Tombol lihat detail produk -->
                <a href="/single-product/{{ $wishlistProduct->product->id }}" class="btn btn-info">
                    <i class="bi bi-eye"></i>
                </a>
                 <!-- Tombol tambah ke keranjang -->
                 <form action="{{ route('cart.addToCart', $wishlistProduct->product->id) }}" method="POST" class="d-inline me-2">
            @csrf
            <input type="hidden" name="product_id" value="{{ $wishlistProduct->product->id }}">
            <button type="submit" class="btn btn-warning">
                <i class="bi bi-cart-fill"></i>
            </button>
        </form>
            </td>
        </tr>
    @endforeach
</tbody>


        <!-- JavaScript and Plugins -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- Javascript -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
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

<!-- Javascript Button -->

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

<script>
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
        // JavaScript untuk menghitung total belanja
        function hitungTotalBelanja() {
            // Loop melalui setiap baris produk pada tabel
            document.querySelectorAll('.product-row').forEach(function(row) {
                const quantity = parseFloat(row.querySelector('.quantity').value);
                const price = parseFloat(row.querySelector('.product-price').textContent.replace('Rp', '').replace(',', ''));
                const total = isNaN(quantity) || isNaN(price) ? 0 : quantity * price; // Periksa jika quantity atau price NaN
                row.querySelector('.product-total').textContent = 'Rp' + total.toLocaleString(); // Tampilkan total belanja
            });

            // Hitung total keseluruhan
            let totalBelanja = 0;
            document.querySelectorAll('.product-total').forEach(function(element) {
                const productTotal = parseFloat(element.textContent.replace('Rp', '').replace(',', ''));
                totalBelanja += isNaN(productTotal) ? 0 : productTotal; // Tambahkan nilai productTotal jika bukan NaN
            });

            // Tampilkan total belanja di dalam elemen dengan ID "totalBelanja"
            document.getElementById('totalBelanja').textContent = 'Rp' + (isNaN(totalBelanja) ? 0 : totalBelanja).toLocaleString(); // Gunakan 0 jika total NaN
        }

        // Panggil fungsi hitungTotalBelanja ketika halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            hitungTotalBelanja();
        });

        // Panggil fungsi hitungTotalBelanja setiap kali ada perubahan pada jumlah produk atau harga
        document.querySelectorAll('.quantity').forEach(function(element) {
            element.addEventListener('change', function() {
                hitungTotalBelanja();
            });
        });


        </script>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk menghitung total harga
            function updateTotal(row) {
                const quantityInput = row.querySelector('.quantity');
                const price = parseFloat(quantityInput.dataset.price);
                const quantity = parseInt(quantityInput.value);
                const totalElement = row.querySelector('.product-total');
                const total = price * quantity;
                totalElement.textContent = 'Rp' + total.toLocaleString();
            }

            // Tambahkan event listener pada tombol increase dan decrease
            document.querySelectorAll('.increase, .decrease').forEach(button => {
                button.addEventListener('click', function() {
                    const row = button.closest('tr');
                    const quantityInput = row.querySelector('.quantity');
                    let quantity = parseInt(quantityInput.value);
                    
                    if (button.classList.contains('increase')) {
                        quantity++;
                    } else if (button.classList.contains('decrease') && quantity > 0) {
                        quantity--;
                    }
                    
                    quantityInput.value = quantity;
                    updateTotal(row);
                });
            });

            // Tambahkan event listener pada input quantity
            document.querySelectorAll('.quantity').forEach(input => {
                input.addEventListener('input', function() {
                    const row = input.closest('tr');
                    updateTotal(row);
                });
            });

            // Inisialisasi perhitungan total pada halaman dimuat
            document.querySelectorAll('tbody tr').forEach(row => {
                updateTotal(row);
            });
        });
        </script>
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


</html>