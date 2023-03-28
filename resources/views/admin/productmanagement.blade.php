@include('menu/header_admin')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="/css/admin/management.css" rel="stylesheet">

<body class="font-sans antialiased">
    <div class="admin">
        <div>@include('menu/navadmin')</div>
        <div id="space">
        </div>
        <div id="table">
            <div id="head">
                <a href="{{route('productmanage')}}">
                    <i class='bx bx-arrow-back'></i>
                </a>
                <h3 id="addtitle">การจัดการสินค้า</h3>
            </div>
            <div id="btn">
                <a href="{{route('productmanage_add')}}" id="addbtn">เพิ่มสินค้า</a>
            </div>
            @if (count($product) > 0)
            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">รูปภาพ</td>
                        <td scope="col">รหัสสินค้า</td>
                        <td scope="col">ชื่อสินค้า</td>
                        <td scope="col">สต๊อก</td>
                        <td scope="col">ขาย</td>
                        <td scope="col">เหลือ</td>
                        <td scope="col">ราคา</td>
                        <td scope="col">สถานะสินค้า</td>
                        <td scope="col">แก้ไข</td>
                        <td scope="col">-----</td>
                        <td scope="col">ลบ</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0 ?>
                    @foreach ($product as $product)
                    <?php $count = $count + 1 ?>
                    <tr id="row">
                        <th scope="row"><?php echo $count ?></th>
                        <td><img src="{{ asset('images_product/'.$product->product_image->first()->name) }}"
                                alt="{{$product->product_image->first()->name}}" id="img"></td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_stock}}</td>
                        <td>----</td>
                        <td>----</td>
                        <td>&#x0E3F;{{number_format($product->product_price, 2)}}</td>
                        <td>สถานะสินค้า</td>
                        <td>
                            <a href="{{url('admin/editproduct/'.$product->id)}}"><i class='bx bxs-edit'></i></a>
                        </td>
                        <td>-----</td>
                        <td>
                            <a href="{{url('admin/deleteproduct/'.$product->id)}}" id="btndel">ลบ</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>No products found.</p>
            @endif
        </div>
    </div>

</body>

</html>