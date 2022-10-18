
@section('proses-timeline2')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
          <h1 class="card-title">Tindak Lanjut Keluhan - Selesai</h1>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header ">
         

        </div>
        <div class="card-body">
        <form method="POST" action="/updatedata3/{{ $datas->id }}" enctype="multipart/form-data">
          @csrf 
            

            <div class="form-group">
              <label for="">Saran / Masukan</label>
              <input type="text" class="form-control" name="alat" id="#" value = "{{$datas->alat}}" placeholder="Masukan nama peralatan disini">
            </div>

            <div class="form-group">
              <label for="#">Catatan</label>
              <input type="text" class="form-control" name="catatan3" id="#" placeholder="Masukan lokasi anda disini" >
              <small id="#" class="form-text text-muted">isi catatan atau keterangan</small>
            </div>

            <div class="form-group">
              <label for="#">Tanggal diterima</label>
              <input type="date" class="form-control" data-language="en" name="tanggal3"data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top-left'  name="tanggal" id="#" placeholder="Masukan Tanggal">
              <small id="#" class="form-text text-muted">Isi tanggal diperbaharui</small>
            </div>

            <div class="form-group">
              <label for="#">Evidence</label>
              <input type="file" class="form-control" name="foto3" id="#" placeholder="Masukan bukti Foto perbaikan disini" >
              <small id="#" class="form-text text-muted">isi foto perbaikan disini</small>
            </div>

           

            <button type="submit" class="btn btn-success">Submit</button>
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