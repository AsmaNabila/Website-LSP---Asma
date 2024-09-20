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

    <!-- Feather Icons  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->

    <link rel="stylesheet" href="css/style.css" />

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

        <style>
    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
    }

    .rating i {
        font-size: 20px;
        padding: 0 2px;
    }

    .rating .filled {
        color: gold;

    }

    .rating {
        display: flex;
        flex-direction: row-reverse; /* Mengatur bintang terisi dari kiri */
    }

    .rating i {
        font-size: 20px;
        padding: 0 2px;
    }

    .fa-star-filled {
        color: gold; /* Warna bintang terisi */
    }

    .fa-star-empty {
        color: #ccc; /* Warna bintang kosong */
    }

    .review-item {
        border-bottom: 1px solid #ccc; /* Atur garis pembatas */
        padding-bottom: 10px; /* Atur jarak antara setiap review */
        margin-bottom: 20px; /* Atur jarak antara setiap review */
    }
    .star-rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
    }
    .star-rating input[type="radio"] {
        display: none;
    }
    .star-rating label {
        font-size: 2rem;
        color: gray;
        cursor: pointer;
    }
    .star-rating input[type="radio"]:checked ~ label {
        color: gold;
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: gold;
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
                        <!-- Navbar-->
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                            <!-- Jika Anda memiliki rute untuk registrasi, tambahkan linknya di sini -->
                                            <!-- <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li> -->
                                        @endauth
                                    </ul>
                                </li>
                            </ul>
                    </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">About Our Service?</a> -->
            </div>
        </header>

     <!-- About Section -->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Form Review</h2>
            <h3 class="section-subheading text-muted">Berikan Review Terbaik Anda untuk Toko Kami</h3>
        </div>
        <!-- FORM -->
       <!-- FORM -->
<div class="table-responsive p-0">
    <div class="card border-2 m-4 pt-4">
        <form action='/insertdataformreview' method="post" id="product_reviews">
            @csrf
            <!-- Automatically populate customer_id from the logged-in user -->
            <input type="hidden" name="customer_id" value="{{ Auth::id() }}">
            <div class="mb-3 ms-3 me-3">
                <label for="product_id" class="form-label" required>Product Name</label>
                <br>
                <select name="product_id" id="product_id" class="form-control" required>
                    <option value="">
                        @foreach ($idproduct as $p)
                        <option value="{{ $p->id}}">{{$p->product_name}}</option>
                        @endforeach
                    </option>
                </select>
            </div>
            <div class="mb-3 ms-3 me-3">
                <label class="form-label">Rating</label>
                <div class="star-rating">
                    <input type="radio" id="star10" name="rating" value="10" required><label for="star10">★</label>
                    <input type="radio" id="star9" name="rating" value="9"><label for="star9">★</label>
                    <input type="radio" id="star8" name="rating" value="8"><label for="star8">★</label>
                    <input type="radio" id="star7" name="rating" value="7"><label for="star7">★</label>
                    <input type="radio" id="star6" name="rating" value="6"><label for="star6">★</label>
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5">★</label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
                </div>
            </div>
            <div class="mb-3 ms-3 me-3">
                <label type="text" class="form-label hidden">Comment</label>
                <textarea rows="5" name="comment" id="comment" class="form-control" placeholder="tuliskan komentar disini" aria-label="name" required></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('product_reviews.index')}}" class="btn btn-danger btn btn-outline-primary">Batal</a>
                <button type="submit" class="btn btn-primary" id="save">Simpan</button>
            </div>
        </form>
    </div>
</div>
    </div>
</section>

           <!-- Review Section -->
       <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Review Product</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah Review dari Tiap Product Dari para Pelanggan</h3>
                </div>
                @foreach ($reviews as $review)
                        <div class="review-item">
                            <p>Customer: {{ $review->customer->name }}</p>
                            <p>Product: {{ $review->product->product_name }}</p>
                            <p>
                                <span class="rating">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <i class="fa fa-star{{ $review->rating >= $i ? ' filled' : '' }}"></i>
                                    @endfor
                                </span>
                                ({{ $review->rating }}/10)
                            </p>
                            <p>Comment: {{ $review->comment }}</p>
                        </div>
                    @endforeach

        <!-- END FORM -->
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

        <script>
    document.getElementById('product_reviews').addEventListener('submit', function(event) {
        // Optional: Add your form submission code here if you want to handle it with AJAX
        // event.preventDefault();
        // const rating = document.querySelector('input[name="rating"]:checked').value;
        // console.log('Rating submitted:', rating);
        // const formData = new FormData(this);
        // fetch('/insertdataformreview', {
        //     method: 'POST',
        //     body: formData
        // }).then(response => response.json()).then(data => console.log(data));
    });
</script>

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