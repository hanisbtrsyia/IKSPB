@extends('layouts.homepage')
@section('title', 'Profil')
@section('content')
    <!-- <body> -->
    <div class="content-wrapper">

        <br><br>
        <div class="col-md-7 offset-md-2">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card  card-outline">
                <h3 class="card-title card-header bg-warning">Profil</h3>
                <div class="card-body box-profile">

                    <form class="form-horizontal" action="{{ route('profil.Custupdate') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="NamaPelanggan" class="col-sm-3 col-form-label">Nama Pengguna</label>
                            <div class="col-sm-9">
                                <input type="NamaPelanggan" class="form-control" name="NamaPelanggan" id="NamaPelanggan"
                                    value="{{ $profil->NamaPelanggan }}" placeholder="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Emel" class="col-sm-3 col-form-label">E-mel</label>
                            <div class="col-sm-9">
                                <input type="Emel" class="form-control" name="Emel" value="{{ $profil->Emel }}"
                                    placeholder="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSkills" class="col-sm-3 col-form-label">Nombor Telefon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputSkills" name="NoTel"
                                    value="{{ $profil->NoTel }}" placeholder="">
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Kemaskini" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>

@endsection
