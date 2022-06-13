<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IKSPB</title>
    <link rel="icon" href="assets/images/Pahang.png" type="image/x-icon" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">

                    <div class="cardx fat mt-4">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Masuk</h4>
                            <form method="POST" class="my-login-validation" autocomplete="off"
                                action="{{ route('register') }}">

                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id_peniaga" id="id_peniaga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="NamaPengguna">Nama Pengguna</label>
                                    <input id="NamaPengguna" type="text" class="form-control" name="NamaPengguna"
                                        autofocus placeholder="Masukkan nama pengguna" required>
                                    <span class="text-danger">
                                        @error('NamaPengguna')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="Emel">Emel</label>
                                    <input id="Emel" type="email" class="form-control" name="Emel"
                                        placeholder="Masukkan emel" required>
                                    <span class="text-danger">
                                        @error('Emel')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="KataLaluan">Kata Laluan</label>
                                    <input id="KataLaluan" type="password" class="form-control" name="password"
                                        data-eye placeholder="Masukkan kata laluan" required>
                                    <span class="text-danger">
                                        @error('KataLaluan')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Sahkan Kata Laluan</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required data-eye
                                        placeholder="Masukkan kata laluan yang sah">
                                    <span class="text-danger">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>

                                <div class="form-check">
									<input type="radio" class="form-check-input" id="radio1" name="role" value="pelanggan" checked>Pelanggan
									<label class="form-check-label" for="radio1"></label>
								  </div>
								  <div class="form-check">
									<input type="radio" class="form-check-input" id="radio2" name="role" value="peniaga">Peniaga
									<label class="form-check-label" for="radio2"></label>
								  </div><br>



                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" class="custom-control-input">
                                        <label for="agree" class="custom-control-label">Saya setuju dengan <a
                                                href="#">Terma dan Syarat</a></label>
                                        <div class="invalid-feedback">
                                            Anda perlu setuju dengan Terma dan Syarat
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-warning btn-block">
                                        Daftar
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Sudah ada akaun? <a href="{{ route('login') }}">Log Masuk</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/my-login.js"></script>
</body>

</html>
