@section('activity02')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Activity</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css?v=3.2.0">

<body class="hold-transition sidebar-mini">


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Aktivitas Pengerjaan Saran / Masukant</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Detil</a></li>
<li class="breadcrumb-item active">Timeline</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<div class="timeline">

<div class="time-label">
<span class="bg-blue">Keluhan Diterima</span>
</div>


<div>
<i class="fas fa-check  bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i>&nbsp;{{$datas->tanggal1}}</span>
<h3 class="timeline-header"><a href="#">Laporan ini sudah diterima</a> </h3>
<div class="timeline-body">
{{$datas->catatan1}}
</div>
</div>
</div>

<div class="time-label">
<span class="bg-yellow">Keluhan Dikerjakan</span>
</div>



<div>
<i class="fas fa-check bg-yellow"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i>&nbsp;{{$datas->tanggal2}}</span>
<h3 class="timeline-header"><a href="#">Laporan ini sedang dikerjakan</a></h3>
<div class="timeline-body">
{{$datas->catatan2}}
</div>

</div>
</div>


<div class="time-label">
<span class="bg-gray">Laporan Selesai</span>
</div>


<div>
<i class="fas fa-check bg-gray"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i>-------</span>
<h3 class="timeline-header"><a href="#">----------------</a> --------------</h3>
<div class="timeline-body">
<!-- tempat foto -->
</div>
</div>
</div>


<div>
<i class="fas fa-check bg-gray"></i>
</div>
</div>
</div>

</div>
</div>

</section>

</div>






<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>

<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('template')}}/dist/js/adminlte.min.js?v=3.2.0"></script>

</body>
</html>
@endsection



