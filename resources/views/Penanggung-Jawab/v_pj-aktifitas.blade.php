@extends('layout.v_pj_template')
@section('title','pj-aktifitas')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Perbaharui Time Line</h1>
          </div>
        </div>
      </div>

      <div class="card">
            <div class="card-header">
            <div>
                  <div class="col">
                  <h6>Filter Data</h6>
                    <form action="" method="" class="form-inline">
                      <input type="search" class="form-control mr-sm-2" name="search" placeholder="cari nama peralatan">
                      <button class="btn btn-outline-info col-1.5 my-0 my-sm-0" type="submit">
                        <div>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                      </button>
                    </form>
                  </div>
                </div>
            </div>  

        <div class="card-body">
                <table class="table">
                    <thead class="thead">
                        <tr>
                        <th scope="col" class="table-secondary">No</th>
                        <th scope="col" class="table-secondary">@sortablelink('nama','Nama')</th>
                        <th scope="col" class="table-secondary">@sortablelink('alat','Nama Peratalan')</th>
                        <th scope="col" class="table-secondary">Tanggal</th>
                        <th scope="col" class="table-secondary">Lokasi</th>
                        <th scope="col" class="table-secondary">Kendala</th>
                        <th scope="col" class="table-secondary">Evidence</th>
                        <th scope="col" class="table-secondary">Tahap</th>
                        </tr>
                    </thead>
                        @php $no = 1; @endphp
                    @foreach( $datas as $key => $value )
                            <tbody>
                                <tr>
                                  <th scope="row">{{ $no++ }}</th>
                                  <td>{{ $value->nama }}</td>
                                  <td>{{ $value->alat }}</td>
                                  <td>{{ $value->tanggal }}</td>
                                  <td>{{ $value->lokasi }}</td>
                                  <td>{{ $value->kendala }}</td>
                                  <td>
                                    <img src="{{asset('evidence/'.$value->evidence)}}" alt="" style="width: 100px;">
                                  </td>
                                  <td>
                                          
                                          <a href = "/tampilkandata3/{{$value->id}}" type="button" class="btn btn-outline-info">
                                            <div>
                                            <i>1</i>
                                            </div>
                                          </a>

                                          

                                          <a href="/tampilkandata4/{{$value->id}}"type="button" class="btn btn-outline-warning">
                                            <div>
                                              <i>2</i>
                                            </div>
                                          </a>

                                          <a href="/tampilkandata5/{{$value->id}}"type="button" class="btn btn-outline-success">
                                            <div>
                                              <i>3</i>
                                            </div>
                                          </a>
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
</div>
        <!-- /.card-footer-->
        {!! $datas->appends(Request::except('page'))->render() !!}

@endsection