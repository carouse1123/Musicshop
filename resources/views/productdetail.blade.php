<x-guest-layout>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @include('menu/navigation')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <link href="/css/productdetail.css" rel="stylesheet">
        <section>
            <div class="container flex">
                <div class="left">
                    <div class="main_image">
                        <img src="{{ asset('images_product/'.$product->product_image->first()->name) }}" alt="{{$product->product_image->first()->name}}" class="card-img-top" id="imageproduct">
                    </div>
                </div>
                <div class="right">
                    <h3>{{$product->product_name}}</h3>
                    <h4 id="price"> &#x0E3F;{{number_format($product->product_price, 2)}}</h4>
                    <p id="detail">{{$product->product_detail}}</p>
                    <h5>Number</h5>
                    <div class="add flex1">
                        <span>-</span>
                        <label>1</label>
                        <span>+</span>
                    </div>
                    <div id="btn">
                        <form action="{{route('product_add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <button id="addtocart" type="submit">เพิ่มสินค้าลงในตะกร้า</button>
                            <a id="chat">ติดต่อร้าน</a>
                        </form>
                    </div>

                </div>
            </div>
            <div class="container" id="maxdetail">
                <div id="title">
                    <h3>รายละเอียดสินค้า</h3>
                </div>
                <p id="basedetail">{{$product->product_detail}}</p>
            </div>

            <script>
                (document).ready(function() {
                    ('.increment-btn').click(function(e) {
                        e.preventDefault();

                        var inc_value = $('.qty-input').val();
                        var value = parseInt(inc_value, 10);
                        value = isNaN(value) ? 0 : value;
                        if (value < 10) {
                            value++;
                            $('.qty-input').val(value);
                        }
                    });
                });
            </script>
</x-guest-layout>