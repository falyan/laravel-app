@extends('layout.v_pj_template')
@section('title','Kotak Masuk')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Edit Data Pengajuan</h1>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header ">
          <h3 class="card-title">Silahkan Edit Data Pengajuan!</h3>

        </div>
        <div class="card-body">
        <form method="POST" action="/updatedata/{{ $datas->id }}" enctype="multipart/form-data">
          @csrf 
            <div class="form-group" >
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" id="#" placeholder="Masukan nama anda disini" value="{{$datas->nama}}" >
            </div>

            <div class="form-group">
              <label for="">Nip</label>
              <input type="text" class="form-control" name="nip" id="#" placeholder="Masukan nip anda disini" value="{{$datas->nip}}">
            </div>

            <div class="form-group">
              <label for="">Nama Peralatan</label>
              <input type="text" class="form-control" name="alat" id="#" placeholder="Masukan nama peralatan disini" value="{{$datas->alat}}">
              <small id="#" class="form-text text-muted">Isi nama peralatan sesuai keadaan peralatan rumah tangga</small>
            </div>

            <div class="form-group">
              <label for="#">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" id="#" placeholder="Masukan lokasi anda disini" value="{{$datas->lokasi}}">
              <small id="#" class="form-text text-muted">Isi lokasi peralatan rumah tangga</small>
            </div>

            <div class="form-group">
              <label for="#">Tanggal</label>
              <input type="date" class="form-control" data-language="en" data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top-left'  name="tanggal" id="#" placeholder="Masukan Tanggal" value="{{$datas->tanggal}}">
              <small id="#" class="form-text text-muted">Isi lokasi peralatan rumah tangga</small>
            </div>

            <div class="form-group">
              <label for="">Kendala</label>
              <input type="text" class="form-control" name="kendala" id="#" placeholder="Masukan kendala anda disini" value="{{$datas->kendala}}">
              <small id="#" class="form-text text-muted">Isi kendala sesuai keadaan peralatan rumah tangga</small>
            </div>

            <div class="form-group">
              <label for="">Evidence</label>
              <input type="file" class="form-control" name="evidence" id="#" placeholder="Masukan bukti foto disini" value="{{$datas->evidence}}">
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

            <button type="submit" class="btn btn-success">Ubah Data Pengajuan</button>
          </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

        

@endsection