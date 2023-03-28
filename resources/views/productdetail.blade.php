<x-guest-layout>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @include('menu/navigation')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <link href="/css/productdetail.css" rel="stylesheet">
        <div class="container">
            <img src="{{ asset('images_product/'.$product->product_image->first()->name) }}" alt="{{$product->product_image->first()->name}}" class="card-img-top" id="imageproduct">

            <figure class="des2">
                <blockquote class="blockquote">
                    <div class="row">
                        <h4 id="productname">{{$product->product_name}}</h4>
                        <hr style="border: 1px solid #FFBB54;">
                        <p id="categories">{{$category->name}}</p>
                        <p id="detail">{{$product->product_detail}}</p>
                        <p id="price">&#x0E3F;{{number_format($product->product_price, 2)}}</p>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <i class='bx bx-minus-circle input-group-text decrement-btn' id="decrement-btn"></i>
                            <input type="" name="quantity " class="form-control text-center qty-input" value="1" id="qty-input" disabled>
                            <i class='bx bx-plus-circle increment-btn input-group-text' id="increment-btn"></i>
                        </div>
                    </div>
                    <div class="row btn">
                        <form action="{{route('cartstore')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button id="btnsell">เพิ่มสินค้าลงในตะกร้า</button>
                            
                            <a href="" id="btnchat">ติดต่อร้าน</a>
                        </form>
                    </div>
                </blockquote>
            </figure>
        </div>
        <div id="productdetail">
            <div id="btnswap">
                <button id="btndetail" class="btnswitch">รายละเอียด</button>
                <button id="btncomment" class="btnswitch">แสดงความคิดเห็น</button>
            </div>
            <div id="blocks">
                <div id="prodetail">
                    <p>{{$product->product_detail}}</p>
                </div>
                <div id="comment"></div>
            </div>
        </div>
    </div>

    <script>
        var btn_detail = document.getElementById("btndetail");
        var btn_comment = document.getElementById("btncomment");
        var prodetail = document.getElementById("prodetail");
        var comment = document.getElementById("comment");
        btn_detail.addEventListener('click', () => {
            prodetail.style.display = 'block';
            comment.style.display = 'none';
            btn_detail.style.backgroundColor = '#FFBB54';
            btn_comment.style.backgroundColor = 'white';
        });
        btn_comment.addEventListener('click', () => {
            prodetail.style.display = 'none';
            comment.style.display = 'block';
            btn_comment.style.backgroundColor = '#FFBB54';
            btn_detail.style.backgroundColor = 'white';
        });
        $(document).ready(function() {
            $('.increment-btn').click(function(e) {
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