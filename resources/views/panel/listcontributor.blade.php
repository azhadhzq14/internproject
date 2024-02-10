@extends('layouts/master')

@section('title')
  Author/Contributor MMS Testpaper.com.my
@endsection

@section('content')
<div class="panel-header panel-header-sm">
  <div class="header text-center">
    <h2 class="title">Senarai Author/Contributor</h2>
  </div>
</div>
<!-- jadual senarai author -->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
            {{ Breadcrumbs::render('admin.listcontributor') }}
            </ol>
          </nav>  
        </div>
        <div class="card-body">
          <!-- -->
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div id="datatable_filter" class="dataTables_filter">
                <label>
                  "Papar"
                  <select name="">
                    <option value =""></option>
                    <option value =""></option>
                    <option value =""></option>
                    <option value =""></option>
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
          <a href="addcontributor">
              <button class="btn btn-primary">
                  <i class="now-ui-icons ui-1_simple-add"></i> Daftar Author
              </button>
          </a>
          </div>
          

          <div class="row">
            <div class="col-sm-12">
            <h4 class="card-title"> Senarai Author/Contributor</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                <th class="text-center">Bil.</th>
                <th>Nama Author/Contributor </th>
                <th class="text-right"> Terperinci </th>
                <th class="text-right"> Padam </th>
                </tr>
              </thead>
              <!-- display data such as name, the button PAPAR to display details information of author, button PADAM to delete the information of author-->
              <tbody>
                @foreach ($listauthor as $listauthor)
                  <tr>
                      <td class="text-center">{{$loop->iteration}}</td> 
                      <td>{{ $listauthor -> name_author }}</td>
                      <td class="td-actions text-right"> 
                        <a href="detailcontributor/{{$listauthor -> id }}">
                          <button type="button" class="btn btn-info">
                            Butiran
                          </button>
                        </a> 
                      </td>
                      <td class="td-actions text-right">
                        <form action="listcontributor/{{$listauthor -> id }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="button" rel="tooltip" class="btn btn-danger" onclick="return confirm('Anda pasti ingin memadam maklumat author/contributor ini ?')">
                            Padam
                          </button>
                        </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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