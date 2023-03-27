@include('menu/header_admin')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="/css/admin/adminmanage.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body class="font-sans antialiased">
    <div class="admin">
        <div>@include('menu/navadmin')</div>
        <div id="space">
        </div>
        <div>


            @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div id="head">
                <a href="{{route('productmanage')}}">
                    <i class='bx bx-arrow-back'></i>
                </a>
                <h3 id="addtitle">เพิ่มสินค้า</h3>
            </div>
            <div id="manage_border" class="card-body">
                <form action="{{route('product_add')}}" method="post" enctype="multipart/form-data" id="manageform">
                    {{ csrf_field() }}
                    <div class="form-group mb-3" id="add">
                        <label for="category_id">เลือกหมวดหมู่:</label>
                        <select name="category_id" id="category">
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3" id="add">
                        <label for="product_name">ชื่อสินค้า:</label>
                        <input type="text" name="product_name" id="input-area">
                    </div>
                    <!-- addimg -->

                    <div class="form-group mb-3" id="add ">
                        <div id="addimg"><label for="filename">เพื่มรูป</label></div>
                        <div id="addimg">
                            <input type="file" name="filename" class="form-control" accept="image/png, image/jpeg"
                                id="imgbtn" hidden="hidden">
                            <div id="btnreal">
                                <span id="btntext">อัปโหลดรูป</span>
                                <button type="button" id="custombtn">เพิ่มรูปภาพ</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3" id="add">
                        <label for="product_stock">จำนวน:</label>
                        <input type="number" name="product_stock" id="input-area">
                    </div>
                    <div class="form-group mb-3" id="add">
                        <label for="product_price">ราคา:</label>
                        <input type="text" name="product_price" id="input-area">
                    </div>
                    <div class="form-group mb-3" id="add">
                        <label for="product_cost">ต้นทุน:</label>
                        <input type="text" name="product_cost" id="input-area">
                    </div>
                    <div class="form-group mb-3" id="add">
                        <label for="product_detail">ข้อมูลสินค้า:</label>
                        <textarea name="product_detail" id="textarea" cols="30" rows="7"
                            style="resize: none;"></textarea>
                    </div>

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

                    <div class="form-group mb-3" id="btn">
                        <input type="reset" value="รีเซ็ต" id="btnreset">
                        <input type="submit" value="เพิ่มสินค้า" id="btnsubmit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    const filebtn = document.getElementById("imgbtn");
    const custombtn = document.getElementById("custombtn");
    const btntext = document.getElementById("btntext");
    custombtn.addEventListener("click", function() {
        filebtn.click();
    });
    filebtn.addEventListener("change", function() {
        if (filebtn.value) {
            btntext.innerHTML = filebtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        } else {
            btntext.innerHTML = "โปรดอัปโหลดรูป"
        }
    });
    </script>
</body>