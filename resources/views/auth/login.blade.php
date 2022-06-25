

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IKSPB</title>
    <link rel="icon" href="assets/images/Pahang.png" type="image/x-icon" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
</head>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: url("assets/images/bg3.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: bottom;
        }

        .bg-glass {
            backdrop-filter: saturate(200%) blur(25px);
            opacity: 85%;
            height: 550px;
            width: 450px;
        }

        label {
            float: left;
        }
    </style>

    <div class="container py-5 px-md-5 text-center text-lg-start ">
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

                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: black; ">
                            Log Masuk</h1>

                        <form method="POST" class="my-login-validation" autocomplete="off"
                            action="{{ route('login') }}">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label for="email" class="float-left">E-Mel</label>
                                <input id="email" type="email" class="form-control" name="email" value=""
                                    required autofocus placeholder="Masukkan E-mel">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label for="password">Kata Laluan
                                    <a href="{{ route('password.request') }}" class="float-left"></a>
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required
                                    data-eye placeholder="Masukkan Kata Laluan">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-warning btn-block">
                                Log Masuk
                            </button>
                            <div class="mt-4 text-center">
                                Tiada akaun? <a href="{{ route('register') }}">Daftar</a>
                            </div>
                            <!-- Register buttons -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

