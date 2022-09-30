@extends('layout.v_pj_template')
@section('title','Proses Pengerjaan')

@include('Penanggung-Jawab.v_proses-timeline')
@include('Penanggung-Jawab.v_proses-timeline1')
@include('Penanggung-Jawab.v_proses-timeline2')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>

      <div class="col-lg-10 col-10">

      @if ($datas->catatan1==Null AND $datas->catatan2==NULL AND $datas->catatan3==NULL ) 
      
      @yield('proses-timeline0')
      
    
      @elseif($datas->catatan2==NULL AND $datas->catatan3==NULL AND $datas->catatan1==$datas->catatan1) 
      
      @yield('proses-timeline1')
       

      @else
      
      @yield('proses-timeline2')
      

     @endif



        
      </div>
      <!-- /.card -->

@endsection