@extends('layout.master', ['title' => 'Food Detail'])


@section('content')
    @include('components.navbar')
    <div class="container my-5">
        <div class="card width-100 shadow border-0 my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-5 p-2">
                        <div class="w-100 h-100 rounded" style="background: url('https://notesplusultra.files.wordpress.com/2016/01/javanese-cuisine_3.jpg?w=620'); background-size: cover;"></div>
                    </div>
                    <div class="col-4 px-5">
                        <h4 class="my-3 fw-semibold">Gado-gado Surabaya<span class="text-orange fw-semibold fs-5 fw-light d-block">Food</span></h4>
                        <h4 class="my-3 text-secondary fs-6">Estimated Price<span class="fw-light text-dark fs-5 d-block">Rp5000 - Rp100000</span></h4>
                        <h4 class="my-3 text-secondary fs-6">Taste<span class="fw-light text-dark fs-5 d-block">Savory</span></h4>
                        <h4 class="my-3 text-secondary fs-6">Calories<span class="fw-light text-dark fs-5 d-block">10 Calories</span></h4>
                    </div>
                </div>
            </div>
          </div>

    <h4>Description</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget dolor ullamcorper, auctor enim sed, eleifend nibh. 
        Quisque sed aliquam metus. Maecenas vitae vehicula massa. Integer aliquet, mauris posuere dictum tempus, tellus urna 
        feugiat tortor, id tristique sapien lacus sit amet turpis. Maecenas sed blandit elit, at rhoncus dui. Sed pellentesque 
        maximus enim nec lacinia. Ut bibendum, magna ut vulputate ullamcorper, leo risus pellentesque est, id 
        faucibus orci felis eu mauris. Morbi placerat turpis est, at aliquet mi molestie sit amet. Vestibulum sit amet sollicitudin felis. 
        Nam interdum nisi sed metus pulvinar lobortis. Nullam lobortis, diam in tincidunt fermentum, lacus felis hendrerit lacus, ut
         eleifend odio ipsum non sapien.</p>

    <h4>Recipe</h4>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget dolor ullamcorper, auctor enim sed, eleifend nibh. 
    Quisque sed aliquam metus. Maecenas vitae vehicula massa. Integer aliquet, mauris posuere dictum tempus, tellus urna 
    feugiat tortor, id tristique sapien lacus sit amet turpis. Maecenas sed blandit elit, at rhoncus dui. Sed pellentesque 
    maximus enim nec lacinia. Ut bibendum, magna ut vulputate ullamcorper, leo risus pellentesque est, id 
    faucibus orci felis eu mauris. Morbi placerat turpis est, at aliquet mi molestie sit amet. Vestibulum sit amet sollicitudin felis. 
    Nam interdum nisi sed metus pulvinar lobortis. Nullam lobortis, diam in tincidunt fermentum, lacus felis hendrerit lacus, ut
     eleifend odio ipsum non sapien.

    </div>
@endsection