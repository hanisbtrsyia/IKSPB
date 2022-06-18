@extends('layouts.master')
@section('title', 'Kemaskini Tempat Menarik')
@section('content')
    <!-- <body> -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home" style="color: #000">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #ffb923">Kemaskini Tempat Menarik</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <br>
            <section class="content">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action="{{ route('TempatMenarik.update', $temMenarik->id_tempatMenarik) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="card  card-outline">
                                <h3 class="card-title card-header bg-warning">Kemaskini Tempat Menarik</h3>
                                <div class="card-body box-profile">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">

                                                <div class="form-group">
                                                    <label for="NamaTempat">Nama Tempat</label>
                                                    <input type="text" name="NamaTempat" id="NamaTempat"
                                                        class="form-control" placeholder=""
                                                        value="{{ $temMenarik->NamaTempat }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Lokasi">Lokasi</label><br>
                                                    <select class="form-select" name="Lokasi" id="Lokasi"
                                                        value="{{ $temMenarik->Lokasi }}"
                                                        aria-label="Default select example">

                                                        <option value="Bera" <?php if ($temMenarik->Lokasi == 'Bera') {
                                                            echo 'selected';
                                                        } ?>>Bera</option>
                                                        <option value="Cameron Highlands" <?php if ($temMenarik->Lokasi == 'Cameron Highlands') {
                                                            echo 'selected';
                                                        } ?>>Cameron
                                                            Highlands</option>
                                                        <option value="Janda Baik" <?php if ($temMenarik->Lokasi == 'Janda Baik') {
                                                            echo 'selected';
                                                        } ?>>Janda Baik
                                                        </option>
                                                        <option value="Jerantut" <?php if ($temMenarik->Lokasi == 'Jerantut') {
                                                            echo 'selected';
                                                        } ?>>Jerantut</option>
                                                        <option value="Kuantan" <?php if ($temMenarik->Lokasi == 'Kuantan') {
                                                            echo 'selected';
                                                        } ?>>Kuantan</option>
                                                        <option value="Lipis" <?php if ($temMenarik->Lokasi == 'Lipis') {
                                                            echo 'selected';
                                                        } ?>>Lipis
                                                        </option>
                                                        <option value="Maran" <?php if ($temMenarik->Lokasi == 'Maran') {
                                                            echo 'selected';
                                                        } ?>>Maran
                                                        </option>
                                                        <option value="Pekan" <?php if ($temMenarik->Lokasi == 'Pekan') {
                                                            echo 'selected';
                                                        } ?>>Pekan</option>
                                                        <option value="Raub" <?php if ($temMenarik->Lokasi == 'Raub') {
                                                            echo 'selected';
                                                        } ?>>Raub</option>
                                                        <option value="Rompin" <?php if ($temMenarik->Lokasi == 'Rompin') {
                                                            echo 'selected';
                                                        } ?>>Rompin
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="penerangan">Penerangan</label>
                                                    <input type="text" name="penerangan" id="penerangan"
                                                        class="form-control" value="{{ $temMenarik->penerangan }}"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="exampleInputFile">Gambar</label>
                                                <div class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/images/attractions/' . $temMenarik['gambar'][0]) }}"
                                                        id='image_preview' class="img-fluid">
                                                </div><br>
                                                <div class="custom-file text-center" type="button"><input type="file"
                                                        accept="images/*" name="gambar[]" multiple id="inputImage"
                                                        onchange="loadFile(event);" />
                                                </div>
                                                <br><br><br>
                                                <div class="text-center">
                                                    <input type="submit" value="Kemaskini" class="btn btn-warning"
                                                        style="position: absolute; right: 10px; bottom: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                    <form method="POST" class="form-horizontal" action="{{ route('TempatMenarik.deleteTemMen') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $temMenarik->id_tempatMenarik }}" name="id_tempatMenarik">
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </div>
            </section>
        </div>

    </div>

@endsection
@push('scripts')
    <script type="text/javascript">
        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(previewId).css('background-image', 'url(' + e.target.result + ')');
                    $(previewId).hide();
                    $(previewId).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
            document.getElementById('image_preview').innerText = event.target.files[0]['name'];
        };
        // $(document).ready(function(){
        //     $('#inputImage').change(function(){
        //         readURL(this,'#image_preview')
        //     })
        // })
    </script>
@endpush
