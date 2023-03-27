<x-guest-layout>
    @include('menu/navigation')
    <link href="/css/product.css" rel="stylesheet">
    <div id="detail" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="category">@include('menu/sidebarcategory')</div>
        <div id="product">
            <h1 class="title">สินค้าทั้งหมด</h1>
            <div class="row">
                @foreach ($product as $product)
                <a class="card col" href="{{URL('productdetail/'.$product->id)}}">
                    <img src="{{ asset('images_product/'.$product->product_image->first()->name) }}"
                        alt="{{$product->product_image->first()->name}}" class="card-img-top" id="imgproduct">
                    <div class="card-body">
                        <h3 class="card-text nameproduct">{{$product->product_name}}</h3>
                        <p class="card-text priceproduct">&#x0E3F;{{number_format($product->product_price, 2)}}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>