@extends('layout.v_user_template')
@section('title','Halaman Formulir')

@section('content')


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Formulir Saran / Masukan Perbaikan Sarana Prasarana </h1>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header ">
          <h3 class="card-title">Silahkan isi Pengajuan Anda!</h3>

        </div>
        <div class="card-body">
        <form method="POST" action="/insertdata" enctype="multipart/form-data">
          @csrf 
            <div class="form-group" >
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" id="#" placeholder="Masukan nama anda disini" >
            </div>

            <div class="form-group">
              <label for="">NIP</label>
              <input type="text" class="form-control" name="nip" id="#" placeholder="Masukan nip anda disini" >
            </div>

            <div class="form-group">
              <label for="">Saran Masukan</label>
              <input type="text" class="form-control" name="alat" id="#" placeholder="Masukan nama peralatan disini">
              <small id="#" class="form-text text-muted">Isi nama Sarpras yang perlu diperbaiki</small>
            </div>

            <div class="form-group">
              <label for="">Keluhan</label>
              <input type="text" class="form-control" name="kendala" id="#" placeholder="Masukan kendala anda disini">
              <small id="#" class="form-text text-muted">Isi kendala sesuai keadaan peralatan rumah tangga</small>
            </div>

            <div class="form-group">
              <label for="#">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" id="#" placeholder="Masukan lokasi anda disini" >
              <small id="#" class="form-text text-muted">Isi lokasi peralatan rumah tangga</small>
            </div>

            <div class="form-group">
              <label for="#">Tanggal Pengajuan</label>
              <input type="date" class="form-control" data-language="en" data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top-left'  name="tanggal" id="#" placeholder="Masukan Tanggal">
              <small id="#" class="form-text text-muted">Isi lokasi peralatan rumah tangga</small>
            </div>

         

            <div class="form-group">
              <label for="">Evidence</label>
              <img class="img-preview img-fluid">
              <input type="file" class="form-control" name="evidence" id="evidence" placeholder="Masukan bukti foto disini" onchange="previewImage()">
              <small id="#" class="form-text text-muted">Isi kendala sesuai keadaan peralatan rumah tangga</small>
            </div>

           

           <!-- <div class="form-group">
                <label for="exampleInputFile">Evidence</label>
                   <div class="input-group">
                      <div class="custom-file">
                        <input type="text" class="custom-file-input" name="evidence" id="evidence">
                        <label class="custom-file-label">Pilih File</label>
                      </div>
                  </div>
                <small id="#" class="form-text text-muted">Masukan foto bukti kerusakan peralatan rumah tangga</small>
              </div> -->

            <button type="submit" class="btn btn-success">Ajukan Masukan</button>
          </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <script>
        function PreviewImage() {
          const image = document.querySelector('#evidence');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }

        
      </script>

@endsection