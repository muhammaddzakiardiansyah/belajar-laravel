{{-- extend layout main --}}
@extends('layouts.mainLayout')
{{-- define app title --}}
@section('title', 'About')
{{-- includ navbar --}}
@include('components.Navbar')
{{-- main app conten --}}
@section('main')
<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">ROKU ID</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Web app job vacancy</h6>
          <p class="card-text">This app can search job for you.</p>
          <a href="#" class="card-link">Learn</a>
          <a href="#" class="card-link">Get Job</a>
        </div>
      </div>
</div>
@endsection