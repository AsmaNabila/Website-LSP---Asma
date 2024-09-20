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
    width: 20px; /* Ubah sesuai kebutuhan lebar yang diinginkan */
    height: 40px; /* Mengatur tinggi agar sama dengan lebar */
    text-align: center; /* Pusatkan teks di dalam kotak input */
}

.input-group-prepend .btn,
.input-group-append .btn {
    height: 50px; /* Mengatur tinggi tombol agar sama dengan lebar kotak input */
}

.input-group-prepend .btn,
.input-group-append .btn {
    display: none; /* Sembunyikan tombol */
}

    .large-checkbox {
        width: 25px;
        height: 25px;
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

        <!-- Sidebar for cart items -->
        <div id="sidebar" class="sidebar">
            <ul id="cartItemList" class="cart-item-list">
                <!-- List of items will be dynamically added here -->
            </ul>
            <button class="btn btn-danger" id="removeFromCartBtn"><i class="bi bi-dash"></i> Remove Item</button>
        </div>

        <!-- Masthead -->
        <header class="masthead">
            <div class="container"></div>
        </header>

        <!-- About Section -->
        <section class="page-section" id="tentang">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">My Cart</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah Barang yang telah anda tambahkan ke Keranjang</h3>
                </div>
            </div>
        </section>

<!-- Cart Section -->
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="table-responsive">
                <form action="{{ route('checkoutvw.store') }}" method="POST">
                    @csrf
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Select</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($cartItems as $cartItem)
                                    <tr class="product-row">
                                        <td class="product-thumbnail">
                                            @if ($cartItem['product']->image1_url)
                                                <img src="{{ asset('storage/' . $cartItem['product']->image1_url) }}" alt="{{ $cartItem['product']->product_name }}" style="width: 100px; height: auto;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td class="product-name">{{ $cartItem['product']->product_name }}</td>
                                        <td class="product-price">Rp{{ $cartItem['product']->getDiscountedPrice() }}</td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary decrease" type="button">&minus;</button>
                                                </div>
                                                <input type="number" value="{{ $cartItem['quantity'] }}" class="form-control text-center quantity cart-update" data-price="{{ $cartItem['product']->price }}" />
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary increase" type="button" data-price="{{ $cartItem['product']->price }}">&plus;</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-total">
                                                <span class="total-price" data-original-price="{{ number_format($cartItem['product']->getDiscountedPrice() * $cartItem['quantity'], 2) }}">
                                                    Rp{{ number_format($cartItem['product']->getDiscountedPrice() * $cartItem['quantity'], 2) }}
                                                </span>
                                            </td>
                                        <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="selected_products[]" value="{{ $cartItem->product_id }}" id="product{{ $cartItem->product_id }}" {{ $cartItem->selected ? 'checked' : '' }} onclick="updateSelectedProduct(this)">
                                        </div>
                                        </td>
                                        <td>
                                            <a href="/hapuscart/{{ $cartItem->id }}"  class="btn btn-danger btn-sm" onclick="return confirmDeletion(event)">Remove</a>
                                        </td>
                                    </tr>
                            </tbody>
                            @endforeach
                    </table>
                </div>

                <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5 btn-group-custom d-flex justify-content-between">
                        <a href ="/productview" class="btn btn-success flex-grow-1">Back To Shopping</a>
                    </div>
                </div>
                <div class="col-md-6">
                    
                <div class="row justify-content-end">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12 text-black h4 border-bottom mb-3">Cart Totals</div>
        </div>
        <!-- Total Belanja -->
        <div class="row mb-3">
            <div class="col-md-6">
                <span class="text-black">Total Harga Cart</span>
            </div>
            <div class="col-md-6 text-right">
                <strong class="text-black" id="totalBelanja">Rp{{ $totalPrice }},00</strong> <!-- ID unik untuk menampilkan total belanja -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-outline-info btn-lg py-3 btn-block">Proceed To Checkout</button>
            </div>
        </div>
    </div>
</div>

            </div>
        <!--Script JS -->
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

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
        <!-- End Footer -->

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

        function updateTotal(row) {
            const quantityInput = row.querySelector('.quantity');
            const price = parseFloat(quantityInput.dataset.price);
            const quantity = parseInt(quantityInput.value);
            const totalElement = row.querySelector('.total-price'); // Mengubah .product-total menjadi .total-price
            const total = price * quantity;
            totalElement.textContent = 'Rp' + total.toLocaleString();
        }
        </script>

<script>
    // Fungsi untuk menyimpan status "selected" ke localStorage saat tombol "Select" diklik
    function updateSelectedProduct(checkbox) {
        const productId = checkbox.value;
        const selectedProducts = JSON.parse(localStorage.getItem('selectedProducts')) || [];
        if (checkbox.checked) {
            if (!selectedProducts.includes(productId)) {
                selectedProducts.push(productId);
            }
        } else {
            const index = selectedProducts.indexOf(productId);
            if (index !== -1) {
                selectedProducts.splice(index, 1);
            }
        }
        localStorage.setItem('selectedProducts', JSON.stringify(selectedProducts));
    }

    // Fungsi untuk memperbarui tampilan tombol "Select" berdasarkan status "selected" di localStorage saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        const selectedProducts = JSON.parse(localStorage.getItem('selectedProducts')) || [];
        selectedProducts.forEach(productId => {
            const checkbox = document.getElementById('product' + productId);
            if (checkbox) {
                checkbox.checked = true;
            }
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
    const totalElement = row.querySelector('.total-price');
    const originalPrice = parseFloat(totalElement.dataset.originalPrice); // Ambil total harga awal
    const total = price * quantity;
    
    // Jika harga total berubah, kembalikan ke total harga awal
    if (total !== originalPrice) {
        totalElement.textContent = 'Rp' + originalPrice.toLocaleString();
    } else {
        totalElement.textContent = 'Rp' + total.toLocaleString();
    }
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

<script>
    function confirmDeletion(event) {
        // Menampilkan dialog konfirmasi
        var userConfirmed = confirm("Apakah Anda yakin ingin menghapus item ini dari keranjang?");
        
        // Jika pengguna tidak mengonfirmasi, mencegah tindakan default (mengikuti link)
        if (!userConfirmed) {
            event.preventDefault();
        }

        // Mengembalikan nilai dari konfirmasi untuk melanjutkan atau membatalkan penghapusan
        return userConfirmed;
    }
</script>


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

</body>
</html>

