@extends('layouts/master')

@section('title')
Jenis Kurikulum Sekolah Rendah
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
    <div class="card-body">
      <div class="places-buttons">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h4 class="card-title">
              SEKOLAH RENDAH
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
    </div>
  </div>
</div>

<!-- paparan jadual maklumat sekren -->
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
      </div>

      <div class="row">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <tr>
            <th class="text-center">Bil. </th>
            <th >Jenis Modul / Subjek</th>
            <th class="text-right"> Borang Perekodan PBD </th>
            <th class="text-right"> CUP (Catch Up Plan) </th>
            <th class="text-right"> Kertas Peperiksaan </th>
            <th class="text-right"> Kertas Ramalan </th>
            <th class="text-right"> Latihan </th> 
            <th class="text-right"> Latihan Amali </th> 
            <th class="text-right"> PAT (Pentaksiran Tahun Akhir) </th>
            <th class="text-right"> PBD (Pentaksiran Bilik Darjah) </th>
            <th class="text-right"> PPT (Pentaksiran Pertengahan Tahun) </th>
            <th class="text-right"> Program Pemulihan Khas </th>
            <th class="text-right"> PPKI (Program Pendidikan Khas Integrasi)</th>
            <th class="text-right"> RPH (Rancangan Pengajaran Harian) </th>
            <th class="text-right"> RPT (Rancangan Pengajaran Tahunan) </th>
            <th class="text-right"> Topikal </th>
            <th class="text-right"> Ujian Sumatif </th>
            <th class="text-right"> UAWSA (Ujian Awal Sesi Akademik) </th>
            <th class="text-right"> UPSA (Ujian Pertengahan Sesi Akademik) </th>
            <th class="text-right"> UASA (Ujian Akhir Sesi Akademik) </th>
            </tr>
          </thead>
          <!-- display data such as name, the button PAPAR to display details information of author, button PADAM to delete the information of author-->
          <tbody>
            <tr>
              <td class="text-center">  </td>
              <td>  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
              <td class="text-right">  </td>
            </tr>
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