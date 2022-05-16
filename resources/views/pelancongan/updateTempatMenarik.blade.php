@extends('layouts.master')
@section('title','Kemaskini Tempat Menarik')
@section('content')
<!-- <body> -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home" style="color: #000">Home</a></li>
            <li class="breadcrumb-item active" style="color: #ffb923">Kemaskini Tempat Menarik</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="col-md-7 offset-md-2">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <h5><i class="icon fas fa-check"></i> Success!</h5>
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card  card-outline">
            <h3 class="card-title card-header bg-warning">Kemaskini Tempat Menarik</h3>
      <div class="card-body box-profile">
        
          <div class="form-group row">
            <label for="NamaTempat" class="col-sm-3 col-form-label">Nama Tempat:</label>
            <div class="col-sm-12">
              <input type="NamaTempat" class="form-control" name="NamaTempat" id="NamaTempat" value="" placeholder="" >
            </div>
          </div>
          <div class="form-group row">
            <label for="Lokasi" class="col-sm-3 col-form-label">Lokasi:</label>
            <div class="col-sm-12">
              <input type="Lokasi" class="form-control" id="Lokasi" value="" placeholder="" >
            </div>
          </div>
          <div class="form-group row">
            <label for="penerangan" class="col-sm-3 col-form-label">Penerangan:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="penerangan" value="" placeholder="" >
            </div>
          </div>
          <label for="exampleInputFile">Gambar</label>
          <div class="text-center">
            <img class="img-fluid" src="" id='image_preview'>
          </div><br>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <div class="custom-file">
                <input type="file" accept="image/*" name="fileToUpload" value="" id="inputImage" onchange="loadFile(event)" />
              </div>
            </div>
          
          <div class="text-center">
            <input type="submit" value="Update" class="btn btn-warning">
          </div>
        </form>
      </div>
    </div>
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