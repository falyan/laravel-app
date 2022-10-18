@extends('layout.v_user_template')
@section('title','Halaman utama')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Selamat Datang di Saran / Masukan Perbaikan Sarpras Puslitbangnak</h1>
          </div>
        </div>
      </div>
       
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Pengajuan Anda </h3>
        </div>

        <div class="card-body">
        <table class="table">
                            <thead class="thead">
                              <tr>
                                <th scope="col" class="table-primary">No</th>
                                <th scope="col" class="table-primary">@sortablelink('alat','Nama Peratalan')</th>
                                <th scope="col" class="table-primary">Lokasi</th>
                                <th scope="col" class="table-primary">Kendala</th>
                                <th scope="col" class="table-primary">Status</th>
                               
                              </tr>
                            </thead>
                            @php $no = 1; @endphp
                    @foreach( $datas as $key => $value )
                            <tbody>
                                <tr>
                                  <th scope="row">{{ $key + $datas->firstItem() }}</th>
                                  <td>{{ $value->alat }}</td>
                                  <td>{{ $value->lokasi }}</td>
                                  <td>{{ $value->kendala }}</td>
                                  <td>

                                  @if($value->catatan1==NULL AND $value->catatan2==NULL AND $value->catatan3==NULL)
                                  
                                  <a href="#"  class="btn btn-secondary">Belum diterima</a>
                                  
                                  @elseif($value->catatan1==$value->catatan1 AND $value->catatan2==NULL AND $value->catatan3==NULL)
                                  
                                    <a href="#"  class="btn btn-info">Diterma</a>
                                  
                                  @elseif($value->catatan1==$value->catatan1 AND $value->catatan2==$value->catatan2 AND $value->catatan3==NULL)
                                  
                                  <a href="#"  class="btn btn-warning">Diproses</a>
                                  
                                  @else
                                  
                                    <a href="#"  class="btn btn-success">Selesai</a>
                                  
                                  @endif
                                  </td>
                                </tr>
                             </tbody> 
                          @endforeach
                 </table> 
                    
        </div>

    

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      {!! $datas->appends(Request::except('page'))->render() !!}

@endsection