@extends('layouts/master')

@section('title')
Jenis Kurikulum Pra-Sekolah
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

        </ol>
      </nav>
      <!-- end breadcrumbs -->
    </div>
    <!-- menu pilihan kurikulum -->
    <div class="card-body">
      <div class="places-buttons">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h4 class="card-title">
              PRA SEKOLAH
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 ml-auto mr-auto">
            <div class="row">
              <form class="d-block w-100" method="post">
                @foreach ($kurikulums as $kurikulum)
                <input class="btn btn-primary btn-lg btn-block w-100" type="submit" name="kurikulum" value="{{$kurikulum->kurikulum}}">
                @endforeach
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end menu pilihan kurikulum -->
    </div>
  </div>
</div>

<!-- paparan jadual maklumat prasekolah -->
<div class="col-md-12">
  <div class="card">
    <div card="card-header">
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div id="datatable_filter" class="dataTables_filter">
            <label>
              "Papar"
              <select name="">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
              </select>
              "Entries"
            </label>
          </div>
        </div>
        <!-- Search Table -->
        <div class="col-sm-12 col-md-6">
          <div id="datatable_filter" class="dataTables_filter">
            <label>
              <input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="datatable">
            </label>
          </div>
        </div>
        <!-- End Search Table -->
      </div>

      <div class="row">
        <div class="table-responsive">
          {{$subjeks -> count()}}
          {{$subjeks -> toSql()}}
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th class="text-center">Bil. </th>
                <th>Kategori Modul/ Subjek</th>
                @foreach ($papercategory as $pac)
                  <th class="text-right"> {{$pac->paper_kategori}}</th>
                @endforeach
              </tr>
            </thead>
            <!-- display data such as name, the button PAPAR to display details information of author, button PADAM to delete the information of author-->
            <tbody>
              @foreach ($subjeks as $subjek)
              <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{$subjek->subjek}}</td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
                <td class="text-right"> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
@endsection