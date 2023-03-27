<x-guest-layout>
    @include('menu/navigation')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/cart.css" rel="stylesheet">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="title">ตะกร้าสินค้าของฉัน</h1>
        <div class="row " id="cartsum">
            <div id="productc">
                @php $total = 0; @endphp
                @if(session('cart'))
                @foreach(session('cart') as $id => $product)
                @php
                $sub_total = $product['price'] * $product['quantity'];
                $total += $sub_total;
                @endphp
                <div class="card col" id="productcart">
                    <img src="{{URL('images/SAGA_SF850_2.jpg')}}" class="card-img-top" alt="SAGA SF850">
                    <div class="card-body" id="detailproduct">
                        <h3 class="card-text nameproduct">{{$product['name']}}</h3>
                        <p class="card-text priceproduct">&#x0E3F;{{number_format($product['price'], 2)}}</p>
                        <a class='bx bx-trash' href="{{route('removecart', [$id])}}"></a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div id="sumcart">
                <div class="card " style="width: 25rem;" id="cartsubmit">
                    <div class="card-body">
                        <h5 class="card-title">สรุปการสั่งซื้อ</h5>
                        <p class="card-text">ตรวจสอบยอด</p>
                        <div id="detailcart">
                            <p id="name">{{$product['name']}}</p>
                            <p id="price">&#x0E3F;{{number_format($product['price'], 2)}}</p>
                        </div>
                        <p>จำนวน : {{$product['quantity']}}</p>
                        <hr>
                        <div id="sumprice">
                            <p id="sum">ยอดสุทธิ</p>
                            <p id="summaryprice">&#x0E3F;{{number_format($total, 2)}}</p>
                        </div>
                        <br>
                        <a href="#" id="btnsubmit">ทำการสั่งซื้อ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>