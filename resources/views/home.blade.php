<x-guest-layout>
    @include('navigation')
    <link href="/css/home.css" rel="stylesheet">
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
                    <img src="{{URL('images/SAGA_SF850_2.jpg')}}" class="card-img-top" alt="SAGA SF850">
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
        <div id="categories">
        @foreach($category as $category)
        <a href="{{URL('category/'.$category->id)}}" style="width: 18rem;" id="category">
            <img src="{{URL('images/test.jpg')}}" class="card-img-top" alt="..." id="img">
            <h5 class="card-title">{{$category->name}}</h5>
        </a>
        @endforeach
        </div>
    </div>
</x-guest-layout>