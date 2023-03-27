@include('menu/header_admin')

<body class="font-sans antialiased">
    <div class="admin">
        <div>@include('menu/navadmin')</div>
        <div id="space">
        </div>
        <div>
            <div id="manage_border" class="card-body">
                @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <a href="{{route('productmanage')}}">กลับ</a>
                <h3>เพิ่มสินค้า</h3>
                <form action="{{url('admin/updateproduct/'.$product->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div>
                        <label for="category_id">เลือกหมวดหมู่:</label>
                        <select name="category_id" id="">
                            @foreach($categories as $categories)
                            <option value="{{$categories->id}}">{{$categories->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="product_name">ชื่อสินค้า:</label>
                        <input type="text" name="product_name" id="" value="{{$product->product_name}}">
                    </div>
                    <!-- addimg -->
                    <div>
                        
                        <label for="filename">แก้ไขรูป:</label>
                        <input type="file" name="filename" class="form-control" accept="image/png, image/jpeg">
                        <img src="{{ asset('images_product/'.$product->product_image->first()->name) }}" alt="{{$product->product_image->first()->name}}" width="150px">
                    </div>

                    <div>
                        <label for="product_stock">จำนวน:</label>
                        <input type="number" name="product_stock" id="" value="{{$product->product_stock}}">
                    </div>
                    <div>
                        <label for="product_price">ราคา:</label>
                        <input type="text" name="product_price" id="" value="{{$product->product_price}}">
                    </div>
                    <div>
                        <label for="product_cost">ต้นทุน:</label>
                        <input type="text" name="product_cost" id="" value="{{$product->product_cost}}">
                    </div>
                    <label for="product_detail">ข้อมูลสินค้า:</label>
                    <textarea name="product_detail" id="" cols="30" rows="7" style="resize: none;">{{$product->product_detail}}</textarea>

                    <p>โปรโมชั่น</p>

                    <div>
                        <label for="promotion_discount">ส่วนลด:</label>
                        <input type="number" name="promotion_discount" id="" value="{{$product->promotion_discount}}">
                    </div>
                    <div>
                        <label for="promotion_start">ส่วนลด:</label>
                        <input type="date" name="promotion_start" id="" value="{{$product->promotion_start}}">
                    </div>
                    <div>
                        <label for="promotion_end">ส่วนลด:</label>
                        <input type="date" name="promotion_end" id="" value="{{$product->promotion_end}}">
                    </div>

                    <div>
                        <input type="submit" value="แก้ไขสินค้า">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>