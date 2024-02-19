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
          {{ Breadcrumbs::render('admin.prasekolah') }}
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
                  @csrf
                  @foreach ($kurikulums as $kurikulum)
                    <input class="btn btn-info btn-lg btn-block w-100" type="submit" name="kurikulum"
                      value="{{ $kurikulum->kurikulum }}">
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
  @if (isset($spks))
    <div class="col-md-12">
      <div class="card">
        <div card="card-header">
        </div>
        <div class="card-body">
        <script>
        $(window).ready(function() {
          new DataTable('#Subjek')
        })
      </script>
        <div class="table-responsive">
          <table class="table" id="Subjek">
            <thead>
              <tr>
                <td class="text-center"  style="font-weight:bold; color:grey">Bil. </td>
                <td style="font-weight:bold; color:grey">Kategori Modul/ Subjek</td>
                @foreach ($papercategory as $pac)
                  <td class="text-center" style="font-weight:bold; color:grey"> {{ $pac->paper_kategori }}</td>
                @endforeach
              </tr>
            </thead>
            <!-- display data such as name, the button PAPAR to display details information of author, button PADAM to delete the information of author-->
            <tbody>
              @foreach ($subjeks as $subjek)
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $subjek->subjek }}</td>
                  @foreach ($papercategory as $pk)
                    <td class="text-center text-bold">
                      <!-- $pk - variable for table paper_kategoris, $subjek variable for table subjeks-->
                      <!-- {{ isset($pivot[$subjek->id][$pk->id]) ? $pivot[$subjek->id][$pk->id] : 0 }} -->
                      @if (isset($pivot[$subjek->id]))
                        @if(isset($pivot[$subjek->id][$pk->id]))
                          {{$pivot[$subjek->id][$pk->id]}}
                        @else
                        0
                        @endif
                        @else
                        0
                      @endif  
                    </td>
                  @endforeach
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection

@section('scripts')
@endsection
