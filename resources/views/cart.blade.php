<x-guest-layout>
    @include('menu/navigation')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/cart.css" rel="stylesheet">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="title">ตะกร้าสินค้าของฉัน</h1>
        <div class="row " id="cartsum">
            @php
            $total = 0;
            @endphp
            <div id="productc">
                @foreach($cart->order_detail as $item)
                <div class="card col" id="productcart">
                    <img src="#" class="card-img-top" alt="{{$item->product}}">

                    <div class="card-body" id="detailproduct">
                        <h3 class="card-text nameproduct">{{$item->product_name}}</h3>
                        <p class="card-text priceproduct">&#x0E3F;{{$item->price}}</p>
                        <a class='bx bx-trash' href="{{url('/deletecart/'.$item->id)}}"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="sumcart">
                <div class="card " style="width: 25rem;" id="cartsubmit">
                    <div class="card-body">
                        <h5 class="card-title">ยอดการสั่งซื้อ</h5>
                        <p class="card-text">ตรวจสอบยอด</p>
                        @foreach($cart->order_detail as $item)
                        <div id="detailcart">

                            <p id="name">{{$item->product_name}}</p>
                            <p id="price">&#x0E3F;{{number_format($item->price, 2)}}</p>

                        </div>
                        <p>จำนวน: {{$item->amount}} ชิ้น</p>
                        <hr>
                        @php
                        $sub_total = $item->price * $item->amount;
                        $total += $sub_total;
                        @endphp
                        @endforeach
                        <div id="sumprice">
                            <p id="sum">ยอดสุทธิ</p>
                            <p id="summaryprice">&#x0E3F;{{number_format($total, 2)}}</p>
                        </div>
                        <br>
                        <a href="" id="btnsubmit">ทำการสั่งซื้อ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>