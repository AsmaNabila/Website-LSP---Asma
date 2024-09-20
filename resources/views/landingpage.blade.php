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

    <link rel="stylesheet" href="css/styles.css" />

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
                        <li class="nav-item"><a class="nav-link" href="#masthead">Masthead</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tentang"> About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/productview"> Menu's</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"> History</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('wishlistlp.index')}}">Wishlist</a></li>
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
                         <!-- Navbar-->
                         <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/customer/login">Login</a></li>
                                            <!-- Jika Anda memiliki rute untuk registrasi, tambahkan linknya di sini -->
                                            <!-- <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        <form class="d-flex" action="">
                        <!-- <button class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-light text-black ms-1 rounded-pill">0</span>
                        </button> -->
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

        <!-- Masthead-->
       <section class="page-section" id="tentang">
            <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">Alasan Mengapa Asma's Bakerys Lahir</h3>
                </div>
            <div class="clearfix">
                    <img src="{{ asset('storage/' . $content ->image) }}" style="width: 550px; height: 535px;" class="col-md-6 float-md-end mb-3 ms-md-3" alt="" width="10" height="500">
                    <p>
                    {{$content->title}}
                    </p>
                    <br>
                    <p>
                    {{$content->subtitle}}
                    </p>
                    <br>
                    <p>
                    {{$content->description}}
                    </p>
                    <a class="btn btn-success" data-toggle="collapse" href="https://wa.link/nr4xkp" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Hubungi Kami
                    </a>
                </div>
            </div>
       </section>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Benefits</h2>
                    <h3 class="section-subheading text-muted">Disini Kami jelaskan kegunaan Website Kami kepada Anda</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce Website</h4>
                        <p class="text-muted">Website ini adalah jembatan antara tim kami dengan para pelanggan atau customer yang ingin membeli kue pada toko kami secara online, guna memudahkan proses pembayaran dan efisiensi waktu</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-clock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Open 24 Hours!</h4>
                        <p class="text-muted">Website ini terbuka selama 24 jam tanpa henti! jadi kapan pun dan dimanapun anda akan tetap dapat mengakses website ini</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-compass fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Product Terbaik</h4>
                        <p class="text-muted">Semua product kue di website ini sudah terjamin mutu dan kualitasnya karena berasal dari toko kue terbaik</p>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- About Section -->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our History</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah Perjalanan dari Asma's Bakery Team.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2018-2020</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dimulai dari perencanaan tim untuk membuka toko kue, dan perencanaan anggota tim untuk membuat website e commerce </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2021</h4>
                                <h4 class="subheading">Memulai Perencanaan design web dan media promosi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kami mulai melakukan perancangan dan membuat website ini sebagai sarana untuk penjualan product kami kepada masyarakat</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Juni 2021</h4>
                                <h4 class="subheading">Peresmian Web dan Lokasi utama Asma's Team</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kami melakukan peresmian website dan peresmian toko </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2021 - Now</h4>
                                <h4 class="subheading">Berjalannya Website dan Rencana</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pada July tahun 2021 sampai sekarang kami sudah resmi membuka usaha toko kue dan website kami sudah berjalan serta sudah memberi banyak impact positif kepada tim kami sendiri dan para pelanggan, baik dari segi efisiensi waktu dan tenaga</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Memperkenalkan team terbaik kami.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Theo</h4>
                            <p class="text-muted">Manager of Asma's Team Bakery</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/asmanbla?igsh=MWtsZWk3cnFyaWhlag==" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Alexa</h4>
                            <p class="text-muted">Web Development</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/cessaaisya?igsh=MXVjbzE2YTRhOXllOA==" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Mack</h4>
                            <p class="text-muted">Social Media Management</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/megafbna?igsh=MTEwMHZ3dHdnZjlqag==" aria-label="Larry Parker Twitter Profile"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Kami adalah pendiri dari asma's bakery.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Instagram Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="WhatsApp Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="WhatsApp Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="WhatsApp Logo" /></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Location</h2>
                    <h3 class="section-subheading text-muted">Here to Find Our Location.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <!-- <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group"> -->
                                <!-- Email address input-->
                                <!-- <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0"> -->
                                <!-- Phone number input-->
                                <!-- <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0"> -->
                                <!-- Message input-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0514729311144!2d106.82019947418475!3d-6.515169493477253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1634a8d9b7b%3A0x62bf3ee496566303!2sPerumahan%20Adiwira%20Persada!5e0!3m2!1sid!2sid!4v1704078037375!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <!-- <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div> -->
                </form>
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
        <!-- Portfolio Modals -->
        <!-- Portfolio item 1 modal popup -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    About This Cake!
                                    <h2 class="text-uppercase">Kue Ulang tahun Teddy bear</h2>
                                    <p class="item-intro text-muted">Kue dengan hiasan teddy bear yang lucu dan menggemaskan.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/produk1.jpg" alt="..." />
                                    <p>Nikmati kelezatan dan kelembutan kue ulang tahun bertema teddy bear kami yang menggemaskan! Hadir dengan desain yang imut dan menggoda, kue ulang tahun teddy bear kami adalah pilihan sempurna untuk merayakan momen istimewa Anda. Setiap gigitan akan memanjakan lidah Anda dengan rasa lembut dan manis yang tak terlupakan. Dibuat dengan bahan-bahan berkualitas terbaik dan cinta yang mendalam, setiap detil kue ini dirancang dengan teliti untuk memukau tamu Anda. Sempurna untuk acara ulang tahun anak-anak atau sebagai hadiah spesial, kue teddy bear kami akan menciptakan kenangan manis yang tak terlupakan. Pesan sekarang dan saksikan senyum bahagia di wajah yang Anda cintai!</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li> 
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    Keterangan Detail!
                                    <h2 class="text-uppercase">Kue ulang Tahun Strawberry</h2>
                                    <p class="item-intro text-muted">Kue dengan bentuk hiasan Strawberry Lucu dan menggemaskan.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/produk2.jpg" alt="..." />
                                    <p>Selamat datang di dunia rasa yang segar dan manis dengan kue ulang tahun Strawberry kami yang memikat! Dibuat dengan buah strawberry segar pilihan, kue ini adalah perpaduan sempurna antara kelezatan dan kesegaran alami. Setiap potongan kue menghadirkan ledakan rasa buah yang menggugah selera. Dengan lapisan krim yang lembut dan tekstur kue yang lembut, setiap gigitan adalah pengalaman yang memuaskan bagi lidah Anda. Tersedia dalam berbagai ukuran dan desain yang menarik, kue ulang tahun Strawberry kami adalah pilihan ideal untuk merayakan momen istimewa. Segera pesan dan nikmati kelezatan yang tak terlupakan!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    Keterangan Detail!
                                    <h2 class="text-uppercase">Kue ulang Tahun Peppa Pig</h2>
                                    <p class="item-intro text-muted">Kue dengan bentuk Peppa Pig yang menggemaskan.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/produk3.jpg" alt="..." />
                                    <p>Sambutlah kegembiraan ulang tahun dengan kue Peppa Pig yang menggemaskan! Dirancang khusus untuk memikat hati para penggemar Peppa Pig, kue ini menghadirkan karakter yang lucu dan ceria dalam setiap potongannya. Dibuat dengan detail yang teliti dan menggunakan bahan-bahan berkualitas tinggi, kue ulang tahun Peppa Pig kami menawarkan pengalaman yang tak terlupakan. Rasakan kelezatan lapisan krim yang lembut dan tekstur kue yang lembut di setiap gigitannya. Cocok untuk semua usia, kue ini adalah pilihan yang sempurna untuk merayakan ulang tahun anak-anak atau pesta tematik. Pesan sekarang dan hadirkan kebahagiaan dalam setiap potongannya!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kue ulang tahun Sapi</h2>
                                    <p class="item-intro text-muted">Kue Ulang tahun dengan hiasan model sapi yang lucu dan menggemaskan.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/produk4.jpg" alt="..." />
                                    <p>Rayakan ulang tahun dengan sentuhan pedesaan yang manis dengan kue ulang tahun bertema sapi kami! Dirancang dengan detail yang menggemaskan, kue ini menghadirkan karakter sapi yang lucu dan menggoda di setiap potongannya. Dibuat dengan bahan-bahan berkualitas tinggi dan dipadukan dengan sentuhan kreatif, kue ulang tahun sapi kami memberikan rasa yang lezat dan tekstur yang lembut. Cocok untuk pesta anak-anak atau pesta dengan tema peternakan, kue ini akan menjadi pusat perhatian yang menyenangkan. Pesan sekarang dan buatlah ulang tahun Anda menjadi momen yang tak terlupakan dengan kue ulang tahun sapi yang memikat ini!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kue ulang tahun Cerry</h2>
                                    <p class="item-intro text-muted">Kue ulang tahun Cerry dengan motif dan buah cerry yang lezat.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/produk7.jpg" alt="..." />
                                    <p>Rayakan keindahan musim dengan kue ulang tahun beraroma ceri kami yang memikat! Dibuat dengan ceri segar pilihan, kue ini memanjakan lidah dengan rasa manis dan segar yang tak terlupakan. Setiap potongannya menghadirkan kelezatan yang memikat dengan kombinasi tekstur lembut dan lapisan krim yang melimpah. Desainnya yang elegan dan sentuhan dekoratifnya akan menambah pesona pada setiap acara ulang tahun. Cocok untuk semua usia dan selera, kue ulang tahun ceri kami adalah pilihan sempurna untuk merayakan momen istimewa Anda. Pesan sekarang dan nikmati kelezatan musim yang tak tertandingi dalam setiap gigitan kue ceri kami!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kue Ulang Tahun Sapi 2</h2>
                                    <p class="item-intro text-muted">Kue ulang tahun dengan motif sapi yang menggemaskan.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/produk6.jpg" alt="..." />
                                    <p>Rayakan keceriaan dengan kue ulang tahun bertema Sapi yang menggemaskan! Kue ini menghadirkan karakteristik Sapi dengan detail yang lucu dan menghibur, memikat hati para tamu Anda. Dibuat dengan bahan-bahan berkualitas terbaik, setiap potongan kue memberikan rasa lezat yang tak terlupakan. Teksturnya yang lembut dan lapisan krimnya yang lezat akan menyenangkan semua lidah yang menikmatinya. Cocok untuk pesta anak-anak atau untuk pencinta hewan, kue ulang tahun Sapi kami adalah tambahan yang sempurna untuk merayakan momen spesial Anda. Pesan sekarang dan buatlah ulang tahun Anda menjadi pesta yang tak terlupakan dengan kue bertema Sapi kami!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kue Nastar Butir</h2>
                                    <p class="item-intro text-muted">Kue kering nastar butir dengan bagian luar yang chruncy dan bagian dalam yang lembut.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/kue/1.jpg" alt="..." />
                                    <p>Nikmati kelezatan tradisional dengan kue Nastar kami yang khas! Dibuat dengan resep warisan yang autentik, setiap gigitan mempersembahkan kombinasi sempurna antara rasa manis nan lembut dan rasa gurih yang menggoda. Nastar kami diperkaya dengan selai nanas segar yang meleleh di mulut, menghadirkan cita rasa yang memanjakan lidah Anda. Dipanggang dengan teliti hingga kecokelatan sempurna, kue ini memiliki tekstur yang renyah di luar namun lembut di dalamnya. Cocok sebagai teman setia untuk acara santai atau sebagai hidangan istimewa di meja perjamuan. Pesan sekarang dan rasakan kenikmatan klasik kue Nastar kami!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Portfolio item 8 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kue Nastar Halus</h2>
                                    <p class="item-intro text-muted">Kue Nastar dengan Isian yang manis dan lembut.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/kue/2.jpg" alt="..." />
                                    <p>Rasakan kenikmatan lembutnya dengan kue Nastar istimewa kami! Dibuat dengan keahlian dan cinta, kue ini menggoda dengan tekstur lembut yang meleleh di lidah Anda. Setiap gigitan mempersembahkan kelezatan yang tak terlupakan, menggabungkan rasa manis nan lembut dengan sentuhan kehangatan. Nastar Lembut kami diperkaya dengan selai nanas segar yang menyegarkan, menciptakan harmoni rasa yang memanjakan selera. Dibuat dengan bahan-bahan berkualitas terbaik dan dipanggang dengan teliti, kue ini siap memikat dan memuaskan setiap penggemar cita rasa tradisional. Cocok untuk setiap kesempatan, nikmati kelezatan kue Nastar Lembut kami yang istimewa. Segera pesan dan nikmati sensasi tak terlupakan!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Portfolio item 9 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kue Sprit</h2>
                                    <p class="item-intro text-muted">Kue sprit dengan tekstur yang lembut dan tidak keras.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/kue/3.jpg" alt="..." />
                                    <p>Rasakan manisnya dan kelezatan kue Spritz kami yang menakjubkan! Dibuat dengan resep klasik yang disempurnakan, kue ini memukau dengan tekstur yang ringan dan rasa yang memikat. Setiap gigitan memancarkan aroma mentega yang lembut, menyatu dengan rasa manis yang menggoda di lidah Anda. Kue Spritz kami dibuat dengan teliti dan dipanggang hingga keemasan yang sempurna, menciptakan pengalaman yang tiada tanding. Cocok sebagai teman setia saat bersantai atau sebagai hidangan istimewa di meja makan. Jadi, hadirkan kesegaran dan kelezatan ke dalam hidangan Anda dengan kue Spritz kami yang luar biasa. Segera pesan dan nikmati kenikmatannya!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

    </footer>
                </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
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

</body>
</html>

