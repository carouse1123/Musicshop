<x-app-layout>
<a href="{{route('dashboard')}}">กลับ</a>
<a href="{{route('productmanage_add')}}">เพิ่มสินค้า</a>
@if (count($product) > 0)
    </table>
    <table class="table table-striped">
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
        @foreach ($product as $product)
        <tr>
            <th scope="row">----</th>
            <td>----</td>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_stock}}</td>
            <td>----</td>
            <td>----</td>
            <td>{{$product->product_price}}</td>
            <td>สถานะสินค้า</td>
            <td>
                <a href="{{url('admin/editproduct/'.$product->id)}}" >แก้ไข</a>
            </td>
            <td>-----</td>
            <td>
                <a href="{{url('admin/deleteproduct/'.$product->id)}}" >ลบ</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No products found.</p>
@endif
</x-app-layout>