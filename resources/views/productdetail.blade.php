<x-guest-layout>
    @include('navigation')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <link href="/css/productdetail.css" rel="stylesheet">
        <div class="container">
            <img src="{{URL('images/SAGA_SF850_2.jpg')}}" class="card-img-top" alt="SAGA SF850">
            <figure class="des2">
                <blockquote class="blockquote">
                    <div class="row">
                        <h4 class="productname">{{$product->product_name}}</h4>
                        <hr style="border: 1px solid #FFBB54;">
                        <p class="detail">{{$product->product_detail}}</p>
                        <p class="price">&#x0E3F;{{number_format($product->product_price, 2)}}</p>
                    </div>
                    <div class="row btn">
                        <a href="" class="btnsell">ซื้อเลย</a>
                        <a href="" class="btnchat">ติดต่อร้าน</a>
                    </div>
                </blockquote>
            </figure>
        </div>
    </div>
</x-guest-layout>