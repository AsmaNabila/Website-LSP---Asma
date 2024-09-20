<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Register | Asma's Bakery</title>
      <link href="{{ asset('styledashboard/css/stylelgrg.css') }}" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="login-form">
         <div class="text">
            Register
         </div>
         <form action="{{ route('register') }}" method="POST" id="register">
            @csrf
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
               <!-- @error('name')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror -->
            </div>
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
               <!-- @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror -->
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi" required>
                <!-- @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror -->
                </div>
                <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                </div>
            <button type="submit">Buat Akun</button>
         </form>
      </div>
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

</html>

</html>
