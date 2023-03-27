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
                <form action="{{route('product_add')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <label for="category_id">เลือกหมวดหมู่:</label>
                        <select name="category_id" id="">
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_name">ชื่อสินค้า:</label>
                        <input type="text" name="product_name" id="">
                    </div>
                    <!-- addimg -->

                    <div class="form-group mb-3">
                        <label for="filename">เพื่มรูป</label>
                        <input type="file" name="filename" class="form-control" accept="image/png, image/jpeg">
                    </div>

                    <div class="form-group mb-3">
                        <label for="product_stock">จำนวน:</label>
                        <input type="number" name="product_stock" id="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_price">ราคา:</label>
                        <input type="text" name="product_price" id="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="product_cost">ต้นทุน:</label>
                        <input type="text" name="product_cost" id="">
                    </div>
                    <label for="product_detail">ข้อมูลสินค้า:</label>
                    <textarea name="product_detail" id="" cols="30" rows="7" style="resize: none;"></textarea>

                    <p>โปรโมชั่น</p>

                    <div class="form-group mb-3">
                        <label for="promotion_discount">ส่วนลด:</label>
                        <input type="number" name="promotion_discount" id="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="promotion_start">ส่วนลด:</label>
                        <input type="date" name="promotion_start" id="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="promotion_end">ส่วนลด:</label>
                        <input type="date" name="promotion_end" id="">
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit" value="เพิ่มสินค้า">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>