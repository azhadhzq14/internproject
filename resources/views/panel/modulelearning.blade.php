@extends('layouts/master')

@section('title')
  Module Learning MMS Testpaper.com.my
@endsection

@section('content')
<div class="panel-header panel-header-sm">
  <div class="header text-center">
    <h2 class="title">Module Learning</h2>
  </div>
</div>
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <!-- breadcrumbs -->
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
        {{ Breadcrumbs::render('admin.modulelearning') }}
        </ol>
      </nav>
      <!-- end breadcrumbs -->
    </div>
    <div class="card-body">
      <div class="places-buttons">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h4 class="card-title">
              TAHAP PENDIDIKAN
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 ml-auto mr-auto">
            <div class="row">
              <div class="col-md-12">
                <a href="prasekolah">
                <button class="btn btn-primary btn-lg btn-block">PRA-SEKOLAH</button>
                </a>
                <a href="sekren">
                <button class="btn btn-primary btn-lg btn-block">SEKOLAH RENDAH</button>
                </a>
                <a href="sekmen">
                <button class="btn btn-primary btn-lg btn-block">SEKOLAH MENENGAH</button>
                </a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
@endsection