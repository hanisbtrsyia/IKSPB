@extends('layouts.master')
@section('title','Profil')
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
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
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
        <h3 class="card-title card-header bg-warning">Profil</h3>
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="img-fluid img-circle" src="" style="width: 180px; height:180px" id='image_preview' alt="User profile picture">
        </div>
        <br>
        
        <form class="form-horizontal" action="{{ route('profile.update',$profile->id_peniaga) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <div class="custom-file text-center">
              <input type="file" accept="image/*" name="fileToUpload" value="" id="inputImage" onchange="loadFile(event)" />
            </div>
          </div>
          <div class="form-group row">
            <label for="NamaPengguna" class="col-sm-3 col-form-label">Nama Pengguna</label>
            <div class="col-sm-9">
              <input type="NamaPengguna" class="form-control" name="NamaPengguna" id="NamaPengguna" value="" placeholder="" >
            </div>
          </div>
          <div class="form-group row">
            <label for="Emel" class="col-sm-3 col-form-label">Emel</label>
            <div class="col-sm-9">
              <input type="Emel" class="form-control" id="Emel" value="" placeholder="" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSkills" class="col-sm-3 col-form-label">Nombor Telefon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputSkills" name="NoTel" value="" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="NamaKedai" class="col-sm-3 col-form-label">Nama Kedai</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="NamaKedai" value="" placeholder="" >
            </div>
          </div>
          <div class="form-group row">
            <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="Alamat" name="Alamat" value="" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="NoAkaun" class="col-sm-3 col-form-label">No Akaun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="NoAkaun" value="" placeholder="" >
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