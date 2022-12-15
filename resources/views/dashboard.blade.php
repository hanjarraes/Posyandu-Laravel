@extends('layouts.sideBar')

@section('container')
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 60vh;">
            <img src="img/download-removebg-preview.png" alt="icon" width="300">
            <div class="d-flex flex-column align-items-center" style="font-size: 84; font-weight: 700;">
                <div>Welcome To Portal</div>
                <div>{{ auth()->user()->name }}</div>
            </div>
        </div>
    </div>
@endsection
