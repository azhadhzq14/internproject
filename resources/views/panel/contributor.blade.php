@extends('layouts/master')

@section('title')
  Author/Contributor MMS Testpaper.com.my
@endsection

@section('content')
<div class="panel-header panel-header-sm">
  <div class="header text-center">
    <h2 class="title">Author/Contributor</h2>
  </div>
</div>
<div class="col-md-12">
            <div class="card">
              <div class="card-header"> 
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                  {{ Breadcrumbs::render('admin.contributor') }}
                  </ol>
                </nav>
              </div>
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-12">
                          <a href="listcontributor">
                          <button class="btn btn-primary btn-lg btn-block">INFORMATION of AUTHOR/CONTRIBUTOR</button>
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <a href="#">
                            <button class="btn btn-primary btn-lg  btn-block">PAYMENT of AUTHOR/CONTRIBUTOR</button>
                          </a>
                        </div>
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