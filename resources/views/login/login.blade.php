<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Customer | Asma's Bakery</title>
    <link href="/styledashboard/css/stylelgrg.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="login-form">
    <div class="text">
        Login Customer
    </div>
    <form action="{{ route('login.login') }}" method="POST" id="login">
        @csrf
        <div class="field">
            <div class="fas fa-user"></div>
            <input type="text" name="login" class="form-control" id="login" placeholder="Email or Name" required>
            <!-- @error('login')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror -->
        </div>
        <div class="field">
            <div class="fas fa-lock"></div>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <!-- @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror -->
        </div>
        <button type="submit">Login</button>
        <div class="link">
            Belum Punya Akun?
            <a href="/customer/register">Register Sekarang</a>
        </div>
        <div class="link">
            Admin?
            <a href="/login">Silahkan Login</a>
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
