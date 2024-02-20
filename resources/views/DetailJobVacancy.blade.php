@extends('layouts.mainLayout')

@section('title', 'Job Vacancy')

@include('components.Navbar')

@section('main')
<div class="container mt-5">
    <h1>detail id {{ $id }}</h1>
</div>
@endsection