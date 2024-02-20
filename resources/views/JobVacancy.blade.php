@extends('layouts.mainLayout')

@section('title', 'Job Vacancy')

@include('components.Navbar')

@section('main')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="w-70">
                <!-- list job vacancy -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mb-3">
                        <a href="/job-vacancy/1" class="text-decoration-none text-dark">
                            <div class="d-flex gap-3 main-card-job-vacancy justify-content-beetwen align-items-center mb-3">
                               <img src="{{ asset('images/loker.jpg') }}" class="rounded img-job-vacancy bg-primary" alt="loker">
                               <div class="card-body">
                                    <h4 class="card-title fw-bold mb-2">Google Company <span class="text-primary">✿</span></h4>
                                    <p class="card-text fw-medium">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mb-3">
                        <a href="/job-vacancy/2" class="text-decoration-none text-dark">
                            <div class="d-flex gap-3 main-card-job-vacancy justify-content-beetwen align-items-center mb-3">
                               <img src="{{ asset('images/loker.jpg') }}" class="rounded img-job-vacancy bg-primary" alt="loker">
                               <div class="card-body">
                                    <h4 class="card-title fw-bold mb-2">Google Company <span class="text-primary">✿</span></h4>
                                    <p class="card-text fw-medium">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-auto"></div>
        <div class="col-md-3">
        <div class="card card-job-vacancy">
            <img src="{{ asset('images/google.png') }}" class="card-img-top" alt="loker">
            <div class="card-body">
                <h5 class="card-title">Google Company</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-sm btn-primary">Go View</a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection