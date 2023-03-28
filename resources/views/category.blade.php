<x-guest-layout>
    @include('menu/navigation')
    <link href="/css/product.css" rel="stylesheet">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="category">@include('menu/sidebarcategory')</div>
        <div id="product">
            <h1 class="title">{{$category->name}}</h1>
            <div class="row ">
                @foreach($product as $product)
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
                                    <form action="{{URL('/cartstore')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <a href="" id="whislist"><i class="fa fa-heart"></i></a>
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <button type="submit">
                                            <a href="{{URL('/cart')}}" id="cart"><i class="fa fa-shopping-cart"></i></a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>


        </div>
    </div>

</x-guest-layout>