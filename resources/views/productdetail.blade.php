<x-guest-layout>
    @include('navigation')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <link href="/css/productdetail.css" rel="stylesheet">
    <div class="container">
        <img src="{{URL('images/SAGA_SF850_2.jpg')}}" class="card-img-top" alt="SAGA SF850">
        <h1>{{$product->product_name}}</h1>
        
    </div>
    </div>
</x-guest-layout>