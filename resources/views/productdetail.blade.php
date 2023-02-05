<x-guest-layout>
    @include('navigation')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <link href="/css/productdetail.css" rel="stylesheet">
        <div class="container">
            <img src="{{URL('images/SAGA_SF850_2.jpg')}}" class="card-img-top" alt="SAGA SF850">
            <figure class="des2">
                <blockquote class="blockquote">
                    <div class="row">
                        <h4 id="productname">{{$product->product_name}}</h4>
                        <hr style="border: 1px solid #FFBB54;">
                        <p id="categories">{{$category->name}}</p>
                        <p id="detail">{{$product->product_detail}}</p>
                        <p id="price">&#x0E3F;{{number_format($product->product_price, 2)}}</p>
                    </div>
                    <div class="row btn">
                        <a href="" id="btnsell">ซื้อเลย</a>
                        <a href="" id="btnchat">ติดต่อร้าน</a>
                    </div>
                </blockquote>
            </figure>
        </div>
        <div id="productdetail">
            <div id="btnswap">
                <button id="btndetail">รายละเอียด</button>
                <button id="btncomment">แสดงความคิดเห็น</button>
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
        btn_detail.addEventListener('click',()=>{
            prodetail.style.display='block';
            comment.style.display='none';
            btn_detail.style.backgroundColor='#FFBB54';
            btn_comment.style.backgroundColor='white';
        });
        btn_comment.addEventListener('click',()=>{
            prodetail.style.display='none';
            comment.style.display='block';
            btn_comment.style.backgroundColor='#FFBB54';
            btn_detail.style.backgroundColor='white';
        });
    </script>
</x-guest-layout>