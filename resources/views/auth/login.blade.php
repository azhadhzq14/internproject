@extends('layouts.app')
@section('title','log masuk MMS.Testpaper.com.my')
@section('content')
<div class="container">
    <div class="row">
    <div class="card">
        <div class="card-header">
                <h5 class="title"> Log masuk mss.Testpaper.com.my </h5>
            </div>
            <div class="card-body">
            <!-- Logo Background mms.Testpaper.com.my -->
            <!-- <img src="{{ asset('assets/img/Logo-Testpaper.png') }}"> -->
            <!-- Registration Form -->
            <form action="{{route ('login-admin')}}" method="post" style="width: 400px"  class="ms-auto me-auto mt-auto">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <!-- Rest of Login form fields -->
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

                <!-- button untuk daftar masuk ke sistem -->
                <div class="mb-3 d-grid">
                    <button class="btn btn-primary" type="submit">Log Masuk</button>
                </div>

                <!-- hyperlink untuk ke halaman pendaftaran sekiranya tidak mempunyai pengguna id untuk log masuk panel dashboard -->
                <div class="mb-3">
                Belum daftar mss.Testpaper.com.my, Sila klik
                <a href="registration">  
                disini
                </a>
                </div>
                <!-- End Rest of Login form fields -->
            </form>
            <!-- End Login Form -->
            </div>
        </div>
    </div>


    </div>
</div>
@endsection

