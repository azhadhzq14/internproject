@extends('layouts/master')

@section('title')
  MMS Testpaper.com.my
@endsection

@section('content')

<!-- End Navbar -->
<div class="panel-header">
<div class="header text-center">
  <h2 class="title">e-MMS - Modul Pengurusan Modul Testpaper.com.my</h2>
  <h5 class="title">Selamat datang, {{$showuser->name_admin}} </h5>
</div>
</div>
<!-- Breadcrumbs header and welcome for user panel dashboard admin -->
<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="places-buttons">
        <!-- breadcrumbs -->
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
            {{ Breadcrumbs::render('admin.dashboardmms') }}
            </ol>
          </nav>
        <!-- end breadcrumbs -->
      </div>
    </div>
  </div>
</div>

<!-- Statistik dashboard -->

  <div class="col-md-12"></div>
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category"> Module Learning</h5>
          <h4 class="card-title">Jumlah modul pra-sekolah</h4>
        </div>
        <div class="card-body">
          <h4> 50 Buah yang tersedia</h4>
          <!-- <canvas id="lineChartExample"></canvas> -->
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Module Learning</h5>
          <h4 class="card-title">Jumlah modul Sek Ren</h4>
        </div>
        <div class="card-body">
          <h4> 800 Buah yang tersedia</h4>
          <!-- <canvas id="lineChartExample"></canvas> -->
        </div>
        <div class="card-footer"> 
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Module Learning</h5>
          <h4 class="card-title">Jumlah modul Sek Men</h4>
        </div>
        <div class="card-body">
          <h4> 900 Buah yang tersedia</h4>
          <!-- <canvas id="lineChartExample"></canvas> -->
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')

@endsection