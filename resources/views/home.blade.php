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
                <a class="card" href="{{URL('productdetail/'.$product->id)}}">
                    <img src="{{ asset('images_product/'.$product->product_image->first()->name) }}"
                        alt="{{$product->product_image->first()->name}}" class="card-img-top" id="imgproduct">
                    <div class="card-body">
                        <h3 class="card-text nameproduct">{{$product->product_name}}</h3>
                        <p class="card-text priceproduct">&#x0E3F;{{number_format($product->product_price, 2)}}</p>
                    </div>
                </a>
                @php
                $counter++;
                @endphp
                @endforeach
                <a class="card " href="">
                    <img src="{{URL('images/test.jpg')}}" class="topseller card-img-top" alt="topseller">
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