@extends('layouts.mainLayout')

@section('title', 'Home')

@include('components/Navbar')

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