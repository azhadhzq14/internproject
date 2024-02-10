@extends('layouts/master')

@section('title')
  Author/Contributor MMS Testpaper.com.my
@endsection

@section('content')
<div class="panel-header panel-header-sm">
</div>

<!-- Jadual maklumat terperinci oleh author -->
<div class="row">
  <div class="col-md">
    <div class="card">
      <div class="card-header">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
            {{ Breadcrumbs::render('admin.detailcontributor', $details_author) }}
            </ol>
        </nav>  
      </div>
      <div class="card-body">
        <h5 class="title">Maklumat Author/Contributor</h5>
        <div class="table-responsive">
        <table class="table">
            <tr>
              <th>Nama Author</th>
              <th>:</th>
              <td class="text-center">{{ $details_author -> name_author }}</td>
            </tr>
            <tr>
              <th>Jantina</th>
              <th>:</th>
              <td class="text-center">{{ $details_author -> gender }}</td>
            </tr>
            <tr>
              <th>Emel Author / Contributor</th>
              <th>:</th>
              <td class="text-center">{{ $details_author -> emel_author }}</td>
            </tr>
            <tr>
              <th>No.Telefon Author/Contributor</th>
              <th>:</th>
              <td class="text-center">{{ $details_author -> contact_no_author }}</td>
            </tr>
            <tr>
              <th>Alamat Author/Contributor</th>
              <th>:</th>
              <td class="text-center">{{ $details_author -> alamat }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
@endsection