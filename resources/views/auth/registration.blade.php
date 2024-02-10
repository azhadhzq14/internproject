@extends('layouts.app')
@section('title','Pendaftaran MMS.Testpaper.com.my')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Pendaftaran Pengguna Baharu MMS.TEstpaper.com.my</h5>
            </div>
            <div class="card-body">
            <!-- Logo Background mms.Testpaper.com.my -->
            <!-- <td style="align-content:center;"><img src="{{ asset('assets/img/Logo-Testpaper.png') }}" style="position: center;"></td> -->
            
            <!-- Registration Form -->
            <form action="{{route ('register-admin')}}" method="post" style="width: 400px"  class="ms-auto me-auto mt-auto">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <!-- Rest of Registration form fields -->
                <div class="mb-3">
                    <label for="admin_name">Nama Penuh</label>
                    <input type="text" class="form-control" placeholder="Sila masukkan nama penuh pengguna" name="admin_name" value="{{ Session::get('admin_name') }}" required>
                    <span class="text-danger">@error ('admin_name') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="admin_name">E-mel </label>
                    <input type="text" class="form-control" placeholder="Sila masukkan emel anda" name="emel_user" value="{{ Session::get('emel_user') }}" required>
                    <span class="text-danger">@error ('emel_user') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="user_id">Pengguna ID</label>
                    <input type="text" class="form-control" placeholder="Masukkan Pengguna ID" name="user_id" value="{{ Session::get('user_id') }}"required>
                    <span class="text-danger">@error ('user_id') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password">Kata Laluan</label>
                    <input type="password" class="form-control" placeholder="Masukkan Kata Laluan Anda" name="password" value="" required>
                    <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                </div>
                <div class="mb-3 d-grid">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </div>
                <div class="mb-3">
                    Telah Daftar akaun mms.Testpaper.com.my, Klik
                    <a href="login">  
                     disini
                    </a>
                </div>
                <!-- End Rest of Registration form fields -->
            </form>
            <!-- End Registration Form -->
            </div>
        </div>
    </div>
</div>
@endsection
