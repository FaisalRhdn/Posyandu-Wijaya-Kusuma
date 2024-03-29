@extends('front.layouts.index')

@section('content')
    <section class="products" id="products">
        <h2>List <span>Wahana </span></h2>

        <div class="row">

            @foreach ($menu as $menus)
                <div class="product-card">
                    <div class="product-icons">
                        {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                        {{-- <a href="#" class="item-detail-button"><i data-feather="eye"></i></a> --}}
                    </div>
                    <div class="product-image">
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $menus->image) }}" class="img-fluid mt-3">
                        </div>
                    </div>

                    <div class="product-content">
                        <h3 style="text-transform:uppercase"><a style="color: white"
                                href="/frontmenu/{{ $menus->id }}">{{ $menus->title }}</a>
                        </h3>
                        {{-- <h4>{{ $menus->description }}</h4> --}}
                        {{-- <div class="product-price">IDR 30K <span>IDR 55K</span></div> --}}
                    </div>


                </div>
            @endforeach
        </div>
    </section>
@endsection
