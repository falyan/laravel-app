@extends('layout.v_user_template')
@section('title','Halaman Aktivitas')

@include('Activity.v_activity01')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>

      <div class="col-lg-10 col-10">
        
        
       @yield('activity01');
      
      
      </div>
      <!-- /.card -->

@endsection