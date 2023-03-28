<x-guest-layout>
    @include('menu/navigation')
    <link href="/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="title">มาใหม่</h1>
        <div class="cards">

            @php
            $counter = 0;
            @endphp
            @foreach($product as $product)
            @if ($counter >= 3 && $counter != 0)
            <div class="row ">
                @break
                @endif
                <a href="{{URL('productdetail/'.$product->id)}}" id="card">
                    <div class="product-card">
                        <div class="product-tumb">
                            <img src="{{ asset('images_product/'.$product->product_image->first()->name) }}"
                                alt="{{$product->product_image->first()->name}}" class="card-img-top" id="imgproduct">
                        </div>
                        <div class="product-details">
                            <h4 id="name">{{$product->product_name}}</h4>
                            <div class="product-bottom-details">
                                <div class="product-price">&#x0E3F;{{number_format($product->product_price, 2)}}
                                </div>
                                <div class="product-links">
                                    <a href="" id="whislist"><i class="fa fa-heart"></i></a>
                                    <a href="" id="cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @php
                $counter++;
                @endphp
                @endforeach
                <a class="card " href="" id="cardss">
                    <img src="{{URL('images/test.jpg')}}" class="topseller card-img-top" alt="topseller" id="imgrec">
                </a>
                <a href="{{ route('product') }}">
                    <div class="allproduct">
                        <div class="card all ">
                            สินค้าทั้งหมด
                            <div class="arrow fas fa-arrow-right"></div>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="title">หมวดหมู่</h1>
        <div id="categories" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <i class="arrow fas fa-arrow-left" id="prev"></i>
            <div id="carousel">
                @foreach($category as $category)
                <a href="{{URL('category/'.$category->id)}}" style="width: 18rem;" id="category">
                    <img src="{{URL('images/test.jpg')}}" class="card-img-top" alt="..." id="img">
                    <h5 class="card-title">{{$category->name}}</h5>
                </a>
                @endforeach
            </div>
            <i class="arrow fas fa-arrow-right" id="next"></i>
        </div>
    </div>
    <script src="/js/category.js"></script>
</x-guest-layout>