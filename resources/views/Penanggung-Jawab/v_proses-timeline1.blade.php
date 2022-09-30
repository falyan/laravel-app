
@section('proses-timeline1')


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
          <h1 class="card-title">Progres Tindak Lanjut Keluhan - Pengerjaan</h1>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header ">
        

        </div>
        <div class="card-body">
        <form method="POST" action="/updatedata2/{{ $datas->id }}" enctype="multipart/form-data">
          @csrf 
            

            <div class="form-group">
              <label for="">Nama Peralatan</label>
              <input type="text" class="form-control" name="alat" id="#" value = "{{$datas->alat}}" placeholder="Masukan nama peralatan disini">
            </div>

            <div class="form-group">
              <label for="#">Catatan</label>
              <input type="text" class="form-control" name="catatan2" id="#" placeholder="Masukan lokasi anda disini" >
              <small id="#" class="form-text text-muted">isi catatan atau keterangan</small>
            </div>

            <div class="form-group">
              <label for="#">Tanggal diterima</label>
              <input type="date" class="form-control" data-language="en" name="tanggal2"data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top-left'  name="tanggal" id="#" placeholder="Masukan Tanggal">
              <small id="#" class="form-text text-muted">Isi tanggal diperbaharui</small>
            </div>

            <div class="form-group">
              <label for="#">Evidence Pengerjaan</label>
              <input type="file" class="form-control" name="foto2" id="#" placeholder="Masukan bukti Foto perbaikan disini" >
              <small id="#" class="form-text text-muted">isi foto perbaikan disini</small>
            </div>

           

            <button type="submit" class="btn btn-warning">Proses</button>
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