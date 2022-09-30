@extends('layout.v_user_template')
@section('title','Halaman Aktivitas')

@include('Activity.v_activity00')
@include('Activity.v_activity01')
@include('Activity.v_activity02')
@include('Activity.v_activity03')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>

      <div class="col-lg-10 col-10">


      @if ($datas->catatan1==Null AND $datas->catatan2==NULL AND $datas->catatan3==NULL ) 
      
        @yield('activity00')
      
    
      @elseif($datas->catatan2==NULL AND $datas->catatan3==NULL AND $datas->catatan1==$datas->catatan1) 
      
        @yield('activity01')
       

      @elseif($datas->catatan1==$datas->catatan1 AND $datas->catatan2==NULL OR $datas->catatan3==NULL ) 
      
        @yield('activity02')
      

      @else 
     
        @yield('activity03')
     
     @endif

       
      
      </div>
      <!-- /.card -->

@endsection