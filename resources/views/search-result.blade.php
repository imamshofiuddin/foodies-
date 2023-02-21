@extends('Layout.master', ['title' => 'Search Result'])

@section('content')
    @include('components.navbar')
    <div class="row mt-2 justify-content-center">
        <div class="col-7">
            <input type="text" class="px-5 py-3 mt-3 form-control form-control-lg rounded-pill fs-6" placeholder="Search food in all over Nusantara..." value="Gado-gado">
        </div>
    </div>

    <h4 class="my-5 fw-semibold text-center">Showing Result of "Gado-gado"</h4>

    <div class="container justify-content-center">
        <div class="col-12 my-3">
            <div class="card width-100 shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 p-2">
                            <div class="w-100 h-100 rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_3.jpg?w=620'); background-size: cover;"></div>
                        </div>
                        <div class="col-4 p-3">
                            <h4 class="my-5 fw-semibold">Gado-gado Surabaya<span class="fs-6 fw-light d-block">Rp5.000 - Rp70.000</span></h4>
                        </div>
                        <div class="col-3 text-end">
                            <p class="text-orange">Food</p>
                            <a href="{{ route('detail-food') }}"><button class="my-auto btn btn-warning bg-orange text-white rounded-pill px-3">See more details</button></a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-12-my-3">
            <div class="card width-100 shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 p-2">
                            <div class="w-100 h-100 rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_3.jpg?w=620'); background-size: cover;"></div>
                        </div>
                        <div class="col-4 p-3">
                            <h4 class="my-5 fw-semibold">Gado-gado Surabaya<span class="fs-6 fw-light d-block">Rp5.000 - Rp70.000</span></h4>
                        </div>
                        <div class="col-3 text-end">
                            <p class="text-orange">Food</p>
                            <a href="{{ route('detail-food') }}"><button class="my-auto btn btn-warning bg-orange text-white rounded-pill px-3">See more details</button></a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-12 my-3">
            <div class="card width-100 shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 p-2">
                            <div class="w-100 h-100 rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_3.jpg?w=620'); background-size: cover;"></div>
                        </div>
                        <div class="col-4 p-3">
                            <h4 class="my-5 fw-semibold">Gado-gado Surabaya<span class="fs-6 fw-light d-block">Rp5.000 - Rp70.000</span></h4>
                        </div>
                        <div class="col-3 text-end">
                            <p class="text-orange">Food</p>
                            <a href="{{ route('detail-food') }}"><button class="my-auto btn btn-warning bg-orange text-white rounded-pill px-3">See more details</button></a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection