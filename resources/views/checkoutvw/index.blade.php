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
    <link rel="icon" type="image/x-icon" href="../assets/img/logoweb.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ ('../css/styles.css')}}" rel="stylesheet" />

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
                align-items: left;
                justify-content: left;
                height: 100vh;
            }

            .section-heading {
                font-size: 2em;
            }

            .section-subheading {
                font-size: 1.2em;
            }

            .button-container {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                gap: 10px;
            }

            .button-container .btn {
                margin: 5px;
            }

            .dropdown-form {
                display: none; /* Initially hidden */
                margin-top: 10px;
                border: 1px solid #ccc;
                padding: 10px;
                background-color: #f9f9f9;
            }

            .dropdown-form form {
                display: flex;
                flex-direction: column;
            }

            .dropdown-form form label {
                margin: 5px 0;
            }

            .dropdown-form form input {
                margin: 5px 0;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .dropdown-form form .btn {
                margin-top: 10px;
            }

            .customer-info {
                text-align: left;
                font-size: 1.1em;
                margin: 20px auto; /* Ubah margin agar ada ruang untuk turun ke bawah halaman */
                max-width: 600px;
            }

            #payment_date {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    font-size: 16px;
    background-color: #f9f9f9;
    color: #333;
}

#payment_date:focus {
    border-color: #007bff;
    background-color: #fff;
    outline: none;
}

.form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px; /* Optional: Change max-width to 600px */
            min-height: 600px; /* Set minimum height to make form taller */
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input,
        .form-container select {
            margin-bottom: 15px;
        }

        .form-container .btn {
            width: 100%;
        }

        /* Menambahkan kelas khusus untuk memperpanjang lebar dropdown */
        .form-control-wide {
            width: 100%;
        }
        </style>

    </style>
</head>
<body id="page-top">
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
                    <li class="nav-item"><a class="nav-link" href="/">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/productview">Menu's</a></li>
                    <li class="nav-item"><a class="nav-link" href="/wishlistlp">Wishlist</a></li>
                    <li class="nav-item"><a class="nav-link" href="/formreview">Form Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="/odetailsview">Payment Details</a></li>
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
            <h2 class="section-heading text-uppercase">Checkout</h2>
            <h3 class="section-subheading text-muted">Berikut adalah Product Yang Akan anda Checkout</h3>
        </div>
<!-- Order Details Index -->
<div class="container">
    <h2>Checkout</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nama Product</th>
                <th>Quantity</th>
                <th>Total Satuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($selectedProducts as $product)
                <tr>
                    <td class="product-thumbnail">
                        @if ($product->image1_url)
                            <img src="{{ asset('storage/' . $product->image1_url) }}" alt="{{ $product->product_name }}" style="width: 100px; height: auto;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $cartItems->where('product_id', $product->id)->first()->quantity }}</td>
                    <td>Rp{{ $product->getDiscountedPrice() }},00</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </table>
            <br>
            <div class="col-md-6">
                <form action="{{ route('checkoutvw.process') }}" method="POST" id="checkoutForm">
                    @csrf
                    <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">
                    <button type="submit" class="btn btn-outline-success" id="save">Make Orders Data</button>
                </form>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-black h4 border-bottom mb-3">Checkout Totals</div>
                        </div>
                    </div>
                    <!-- Total Belanja -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <span class="text-black">Total Belanja</span>
                        </div>
                        <div class="col-md-6 text-right" id="totalPrice">
                            <strong class="text-black">Rp{{ $totalPrice }},00</strong>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/storecheckout" method="POST" id="frmUser">
                @csrf
                <input type="hidden" name="totalPrice" value="{{ $totalPrice }}"> <!-- Add this hidden input -->
                <div class="form-group">
                    <label for="payment_date">Payment Date</label>
                    <input type="date" class="form-control" id="payment_date" name="payment_date" required>
                </div>
                <div class="form-group">
                    <label for="payment_method">Metode Pembayaran</label>
                    <select class="form-control form-control-wide" id="payment_method" name="payment_method" required onchange="toggleTransferForm()">
                        <option value="" disabled selected>Pilih Metode Pembayaran</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Cash">Cash</option>
                    </select>
                </div>
                <div id="transfer_form" class="form-group" style="display: none;">
                    <label for="transfer_details">Card Number</label>
                    <input type="number" class="form-control" id="transfer_details" name="transfer_details" placeholder="Card Number">
                </div>
                <div class="form-group">
                    <label type="nama">Total Pembelian</label>
                    <input type="number" id="amount" name="amount" class="form-control" aria-label="amount" required>
                </div>
                <button type="submit" class="btn btn-primary" id="save" onclick="return confirmOrder()">Lakukan Pembayaran</button>
                <script>
                    function confirmOrder() {
                        return confirm("Apakah Anda yakin ingin Melakukan Pembayaran?");
                    }
                </script>
            </form>
        </div>
    </div>
</section>

<section>
</section>

<section>

   <!-- Customer View Section -->
   <section class="page-section" id="productview" id="customer-info">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Data Customer</h2>
                <h3 class="section-subheading text-muted">Pastikan data anda dibawah ini adalah tepat!</h3>
            </div>
            <div class="customer-info d-flex align-items-start">
                <i class="fas fa-user fa-3x me-2 align-self-center"></i>
                <div class="customer-info">
                    <p><strong>Name:</strong> {{ $customers->name }}</p>
                    <p><strong>Email:</strong> {{ $customers->email }}</p>
                    <p><strong>Phone:</strong> {{ $customers->phone }}</p>
                    <p><strong>Address 1:</strong> {{ $customers->address1 }}</p>
                    <p><strong>Address 2:</strong> {{ $customers->address2 }}</p>
                    <p><strong>Address 3:</strong> {{ $customers->address3 }}</p>
                </div>
            </div>
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
/// Fungsi untuk memperbarui jumlah item di ikon keranjang
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

document.addEventListener('DOMContentLoaded', function () {
            const checkoutItems = JSON.parse(localStorage.getItem('selectedItems'));
            const checkoutContainer = document.getElementById('checkoutItems');
            const totalPriceContainer = document.getElementById('totalPrice');
            const amountField = document.getElementById('amount');
            let totalPrice = 0;

            
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
    document.getElementById('checkoutForm').addEventListener('submit', function(event) {
        var confirmAction = confirm("Apakah Anda yakin ingin melakukan checkout barang  ini?");
        if (!confirmAction) {
            event.preventDefault(); // Prevent form submission if the user clicks "Cancel"
        }
    });
</script>

<script>
function toggleDropdown() {
    var dropdown = document.getElementById('dropdown-form');
    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
        dropdown.style.display = 'block';
        scrollToCustomerInfo(); // Panggil fungsi untuk pergerakan halaman
    } else {
        dropdown.style.display = 'none';
    }
}

function scrollToCustomerInfo() {
    // Dapatkan posisi vertikal dari bagian data customer
    const customerInfoPosition = document.getElementById('customer-info').offsetTop;
    // Scroll ke posisi tersebut dengan efek smooth
    window.scrollTo({
        top: customerInfoPosition,
        behavior: 'smooth'
    });
}
</script>

<script>
    function toggleTransferForm() {
        var paymentMethod = document.getElementById("payment_method").value;
        var transferForm = document.getElementById("transfer_form");

        if (paymentMethod === "Transfer") {
            transferForm.style.display = "block";
        } else {
            transferForm.style.display = "none";
        }
    }
</script>

<script>
    function toggleDropdownForm() {
        var dropdownForm = document.getElementById("dropdown-form");
        // Jika dropdown-form sedang ditampilkan, sembunyikan
        if (dropdownForm.style.display === "block") {
            dropdownForm.style.display = "none";
        } else { // Jika dropdown-form sedang disembunyikan, tampilkan
            dropdownForm.style.display = "block";
        }
    }
</script>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
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

<script>
function toggleDropdown() {
    var dropdown = document.getElementById('dropdown-form');
    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
        dropdown.style.display = 'block';
        scrollToCustomerInfo(); // Panggil fungsi untuk pergerakan halaman
    } else {
        dropdown.style.display = 'none';
    }
}

function scrollToCustomerInfo() {
    // Dapatkan posisi vertikal dari bagian data customer
    const customerInfoPosition = document.getElementById('customer-info').offsetTop;
    // Scroll ke posisi tersebut dengan efek smooth
    window.scrollTo({
        top: customerInfoPosition,
        behavior: 'smooth'
    });
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



