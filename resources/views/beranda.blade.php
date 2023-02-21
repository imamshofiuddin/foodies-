@extends('layout.master', ['title' => 'beranda'])

@section('content')
    @include('components.navbar')
    <div class="container-fluid bg-green">
        <div class="container py-5">
            <h1 class="fw-semibold text-center text-white">All Indonesian Food that you want, in one place! 
                <span class="d-block fw-light fs-5 my-3">Find the food detail and get the best recipe </span> 
            </h1>
            <div class="row mt-2 justify-content-center">
                <div class="col-7">
                    <input type="text" class="px-5 py-3 mt-3 form-control form-control-lg rounded-pill fs-6" placeholder="Search food in all over Nusantara...">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 text-center">
                    <div class="mb-3 card border-0 width-100" style=" height: 10rem">
                        <div class="card-body rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_3.jpg?w=620'); background-size: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="mb-3 card border-0 width-100" style=" height: 10rem">
                        <div class="card-body rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_6.jpg?w=620'); background-size: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="mb-3 card border-0 width-100" style="height: 10rem">
                        <div class="card-body rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_11.jpg?w=620'); background-size: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <h4 class="mt-5 mb-3 fw-semibold text-center"> <span class="text-orange"> Explore </span> Top Searches in Foodies</h4>
        <p class="text-center">Try to <a href="{{ route('search-food') }}"> "search gado-gado" </a></p>
    </div>
@endsection