@extends('layouts.master')
@section('title', 'Tambah Tempat Menarik')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: black;" class="m-0"></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home" style="color: #000">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #ffb923">Tambah Tempat Menarik</li>
                        </ol>
                    </div>
                </div>
            </div>
            <br>
            <section class="content">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('addTempatMenarik.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="card card-info">
                                <div class="card-header bg-warning">
                                    <h3 class="card-title">Tambah Tempat Menarik</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NamaTempat">Nama Tempat</label>
                                                <input type="text" name="NamaTempat" id="NamaTempat" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="Lokasi">Lokasi</label><br>
                                                <select class="form-select" name="Lokasi" id="Lokasi"
                                                    aria-label="Default select example">
                                                    <option selected>Pilih Lokasi</option>
                                                    <option value="Bera">Bera</option>
                                                    <option value="Cameron Highlands">Cameron Highlands</option>
                                                    <option value="Janda Baik">Janda Baik</option>
                                                    <option value="Jerantut">Jerantut</option>
                                                    <option value="Kuantan">Kuantan</option>
                                                    <option value="Lipis">Lipis</option>
                                                    <option value="Maran">Maran</option>
                                                    <option value="Pekan">Pekan</option>
                                                    <option value="Raub">Raub</option>
                                                    <option value="Rompin">Rompin</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="penerangan">Penerangan</label>
                                                <input type="text" name="penerangan" id="penerangan" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="exampleInputFile">Gambar</label>
                                            <div class="text">
                                                <img class="img-fluid" src="" id='image_preview'>
                                            </div>
                                            <div class="custom-file text" type="button"><input type="file"
                                                    accept="images/*" name="gambar[]" multiple id="inputImage" />
                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <input type="submit" value="Hantar" class="btn btn-warning"
                                                style="position: absolute; right: 10px; bottom: 5px;">
                                        </div>

                                    </div>
                                </div>
                        </fieldset>
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
