<x-guest-layout>
    @include('navigation')
    <link href="/css/home.css" rel="stylesheet">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1>มาใหม่</h1>
        <div class="cards">
            <div class="card " style="width: 14rem;">
                <img src="{{URL('images/SAGA_SF850_2.jpg')}}" class="card-img-top" alt="SAGA SF850">
                <div class="card-body">
                    <p class="card-text ">SAGA SF850 Acoustic Guitar ( Solid Top )</p>
                </div>
            </div>
            <div class="card " style="width: 14rem;">
                <img src="{{URL('images/CT_S300_1.jpg')}}" class="card-img-top" alt="SAGA SF850">
                <div class="card-body">
                    <p class="card-text ">SAGA SF850 Acoustic Guitar ( Solid Top )</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>