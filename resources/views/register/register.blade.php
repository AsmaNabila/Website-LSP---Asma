<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Register Customer | Asma's Bakery</title>
    <link href="{{ asset('styledashboard/css/stylelgrg.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/logoweb.png" />
</head>
<body>
<div class="login-form">
    <div class="text">
        Register Customer
    </div>
    <form action="{{ route('register.register') }}" method="POST" id="register">
        @csrf
        <div class="field">
            <div class="fas fa-envelope"></div>
            <input type="text" name="name" class="form-control" id="name" placeholder="Asma Nabila" required>
        </div>
        <div class="field">
            <div class="fas fa-envelope"></div>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
        </div>
        <div class="field">
            <div class="fas fa-lock"></div>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="field">
            <div class="fas fa-phone"></div>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
        </div>
        <div class="field">
            <div class="fas fa-map-marker-alt"></div>
            <input type="text" name="address1" class="form-control" id="address1" placeholder="Address 1" required>
        </div>
        <div class="field">
            <div class="fas fa-map-marker-alt"></div>
            <input type="text" name="address2" class="form-control" id="address2" placeholder="Address 2 (optional)" required>
        </div>
        <div class="field">
            <div class="fas fa-map-marker-alt"></div>
            <input type="text" name="address3" class="form-control" id="address3" placeholder="Address 3 (optional)" required>
        </div>
        <button type="submit">Buat Akun</button>
        <div class="link">
            Sudah Punya Akun?
            <a href="/customer/login">Login Sekarang</a>
        </div>
        <div class="link">
            User biasa?
            <a href="/">Masuk ke halaman Home</a>
        </div>
    </form>
</div>
</body>

<!-- Include JavaScript files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

<!-- Include SweetAlert script -->
@include('sweetalert::alert')

<!-- Additional JavaScript for showing alerts -->
<script>
    const sts = document.getElementById("sts");
    const psn = document.getElementById("psn");

    function pesan_simpan() {
        if (sts.value === "simpan") {
            swal("Good Job!", psn.value, "success");
        }
    }
    window.onload = function() {
        pesan_simpan();
    }
</script>

</html>
