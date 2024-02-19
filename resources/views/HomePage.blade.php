{{-- extend layout main --}}
@extends('layouts.mainLayout')
{{-- define app title --}}
@section('title', 'Home')
{{-- includ navbar --}}
@include('components/Navbar')
{{-- main app conten --}}
@section('main')
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
        </tr>
    </tbody>
</table>
@endsection