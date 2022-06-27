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
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            
            background-image: url("assets/images/bg3.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: bottom;
        }

        .bg-glass {
            backdrop-filter: saturate(200%) blur(25px);
            opacity: 85%;
            height: 670px;
            width: 450px;
        }

        label {
            float: left;
        }
    </style>
    <div class="container py-5 px-md-5 text-lg-start ">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    e-Pasar IKS Pahang Barat <br />
                    <span style="color:#E48700">untuk semua</span>
                </h1>

            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">

                <div class="card bg-glass">
                    <div class="card-body px-md-5">

                        <h2 style="color: black; ">
                            Daftar</h2>
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
                                <div class="form-outline mb-4">
                                    <input type="hidden" name="id_peniaga" id="id_peniaga" class="form-control">
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="NamaPengguna">Nama Pengguna</label>
                                    <input id="NamaPengguna" type="text" class="form-control" name="NamaPengguna"
                                        autofocus placeholder="Masukkan Nama Pengguna" required>
                                    <span class="text-danger">
                                        @error('NamaPengguna')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="Emel">E-mel</label>
                                    <input id="Emel" type="email" class="form-control" name="Emel"
                                        placeholder="Masukkan E-mel" required>
                                    <span class="text-danger">
                                        @error('Emel')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="KataLaluan">Kata Laluan (Sekurang-kurangnya 6 aksara)</label>
                                    <input id="KataLaluan" type="password" class="form-control" name="password" data-eye
                                        placeholder="Masukkan Kata Laluan" required>
                                    <span class="text-danger">
                                        @error('KataLaluan')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password-confirm">Sahkan Kata Laluan</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required data-eye
                                        placeholder="Masukkan Kata Laluan yang Sah">
                                    <span class="text-danger">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>

                                Anda seorang:
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="role"
                                        value="pelanggan" checked>Pelanggan
                                    <label class="form-check-label" for="radio1"></label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio2" name="role"
                                        value="peniaga">Peniaga
                                    <label class="form-check-label" for="radio2"></label>
                                </div>
                                <br>
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-warning btn-block">
                                        Daftar
                                    </button>
                                </div>
                                <div class="mt-3 text-center">
                                    Sudah ada akaun? <a href="{{ route('login') }}" >Log Masuk</a>
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
