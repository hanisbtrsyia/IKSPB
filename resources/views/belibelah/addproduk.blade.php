@extends('layouts.master')
@section('title', 'Tambah Produk')
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
                            <li class="breadcrumb-item active" style="color: #ffb923">Tambah Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
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
                    <form action="{{ route('addproduk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="card card-info">
                                <div class="card-header bg-warning">
                                    <h3 class="card-title">Tambah Produk</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                            <label for="NamaKategori">Nama Kategori</label><br>
                                            <select class="form-select" name="NamaKategori" id="NamaKategori"
                                                aria-label="Default select example">
                                                <option selected>Pilih Kategori</option>
                                                <option value="Kerepek">Kerepek</option>
                                                <option value="Sambal">Sambal</option>
                                                <option value="Makanan Sejuk Beku">Makanan Sejuk Beku</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="NamaProduk">Nama Produk</label>
                                                <input type="text" name="NamaProduk" id="NamaProduk" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="Harga">Harga</label>
                                                <input type="text" name="Harga" id="Harga" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="Unit">Unit</label>
                                                <input type="text" name="Unit" id="Unit" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="Berat">Berat</label>
                                                <input type="text" name="Berat" id="Berat" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="penerangan">Penerangan</label>
                                                <input type="text" name="penerangan" id="penerangan" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                                <!-- <label for="exampleInputFile">Gambar</label>
                                                  <div class="text-center">
                                                    <img class="img-fluid" src="" id='image_preview'>
                                                  </div><br>
                                                  <div class="custom-file">
                                                    <input type="file" accept="image/*" name="GambarProduk" id="GambarProduk" onchange="loadFile(event);" />
                                                  </div>
                                                </div>-->
                                                <div class="col-6">
                                                    <label for="exampleInputFile">Gambar</label>
                                                    <div class="text-center">
                                                        <img class="img-fluid" src="" id='image_preview' alt="Gambar produk">
                                                    </div><br>
                                                    <div class="custom-file text-center" type="button"><input
                                                            type="file" accept="images/*" name="GambarProduk[]" multiple
                                                            id="inputImage" />
                                                    </div>

                                                    <div class="text-center">
                                                        <input type="submit" value="Submit" class="btn btn-warning" style="position: absolute; right: 10px; bottom: 5px;">
                                                    </div>
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
