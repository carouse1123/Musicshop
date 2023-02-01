@if(session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
<a href="{{route('productmanage')}}">กลับ</a>
<h3>เพิ่มสินค้า</h3>
<form action="{{route('product_add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="category_id">เลือกหมวดหมู่:</label>
        <select name="category_id" id="">
            @foreach($category as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="product_name">ชื่อสินค้า:</label>
        <input type="text" name="product_name" id="">
    </div>
    <!-- addimg -->

    <div>
        <label for="product_image">เพื่มรูป</label>
        <input type="file" name="product_image" id="" class="form-control" required>
    </div>

    <div>
        <label for="product_stock">จำนวน:</label>
        <input type="number" name="product_stock" id="">
    </div>
    <div>
        <label for="product_price">ราคา:</label>
        <input type="text" name="product_price" id="">
    </div>
    <div>
        <label for="product_cost">ต้นทุน:</label>
        <input type="text" name="product_cost" id="">
    </div>
    <label for="product_detail">ข้อมูลสินค้า:</label>
    <textarea name="product_detail" id="" cols="30" rows="7" style="resize: none;"></textarea>

    <p>โปรโมชั่น</p>

    <div>
        <label for="promotion_discount">ส่วนลด:</label>
        <input type="number" name="promotion_discount" id="">
    </div>
    <div>
        <label for="promotion_start">ส่วนลด:</label>
        <input type="date" name="promotion_start" id="">
    </div>
    <div>
        <label for="promotion_end">ส่วนลด:</label>
        <input type="date" name="promotion_end" id="">
    </div>

    <div>
        <input type="submit" value="เพิ่มสินค้า">
    </div>
</form>