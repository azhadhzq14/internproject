@extends('layouts/master')

@section('title')
  Author/Contributor MMS Testpaper.com.my
@endsection

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                    {{ Breadcrumbs::render('admin.addcontributor') }}
                    </ol>
                  </nav> 
                </div>
                <div class="card-body">
                    <a href="listcontributor">
                      <button class="btn btn-primary">
                          <i class="now-ui-icons arrows-1_minimal-left"></i> Kembali
                      </button>
                    </a>
                    <h5 class="title"> Tambah maklumat author/contributor </h5>
                    <form action="{{route ('admin.addcontributor')}}" method="post">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                         @endif
                         @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <div class="form-group">
                           <label for="nama_author">Nama Author/Contributor</label>
                           <input type="text" class="form-control" placeholder="Nama Penuh Author/Contributor" name="name_author" value="{{ Session::get('name_author')}}" required>
                           <span class="text-danger">@error ('name_author') {{$message}} @enderror</span>
                         </div>
                         <div class="form-group">
                           <label for="gender">Jantina</label>
                           <select class="form-control" name="gender" value="{{ Session::get('gender')}}" required>
                             <option>Lelaki</option>
                             <option>Perempuan</option>
                           </select>
                         </div>
                         <div class="form-group">
                           <label for="emel_author">E-mel Author/Contributor</label>
                           <input type="email" class="form-control" placeholder="example@gmail.com" name="emel_author" value="{{ Session::get('emel_author')}}" required>
                           <span class="text-danger">@error ('emel_author') {{$message}} @enderror</span>
                         </div>
                         <div class="form-group">
                           <label for="emel_author">No.Telefon</label>
                           <input type="text" class="form-control" placeholder="Cth:0198765432" name="contact_no_author" value="{{ Session::get('contact_no_author')}}" required>
                           <span class="text-danger">@error ('contact_no_author') {{$message}} @enderror</span>
                         </div>
                         
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" value="{{ Session::get('alamat')}}" required></textarea>
                            <span class="text-danger">@error ('alamat') {{$message}} @enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar Author/Contributor</button>
                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection