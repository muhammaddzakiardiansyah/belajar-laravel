@extends('layouts.mainLayout')

@section('title', 'Job Vacancy')

@include('components.Navbar')

@section('main')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search evrything in here" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
            <div class="w-70 mt-4">
                <!-- list job vacancy -->
                <ul class="list-group list-group-flush">
                    @if (count($vacancies) === 0) 
                        <h3 class="text-center mt-4">Nothing Job Vacancy ＞︿＜</h3>
                    @endif
                    @foreach ($vacancies as $vacancy)
                    <li class="list-group-item mb-3">
                        <a href="/job-vacancy/{{ $vacancy->id }}" class="text-decoration-none text-dark">
                            <div class="d-flex gap-3 main-card-job-vacancy justify-content-beetwen align-items-center mb-3">
                               <img src="{{ asset('images/' . $vacancy->vacancy_img) }}" class="rounded img-job-vacancy bg-primary" alt="{{ $vacancy->vacancy_img }}">
                               <div class="card-body body-job-vacancy">
                                    <h4 class="card-title fw-bold mb-2">{{ $vacancy->company->company_name }} <span class="text-primary">✿</span></h4>
                                    <p class="text-author">Dibuat oleh {{ $vacancy->admin->nama_admin }}</p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <p class="card-text fw-medium">{{ $vacancy->main_vacancy }}.</p>
                                        <p class="text-date">{{ $vacancy->created_at->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
                {{ $vacancies->links('pagination::simple-bootstrap-4') }}
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            {{-- @if($vacancies[1]->company->company_name == 'Google')
            <div class="card card-job-vacancy">
                <img src="{{ asset('images/google.png') }}" class="card-img-top" alt="loker">
                <div class="card-body">
                    <h5 class="card-title">{{ $vacancies[1]->company->company_name }}</h5>
                    <p class="card-text">Google company.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go View</a>
                </div>
            </div>   
            @endif --}}
        </div>
    </div>
</div>
@endsection