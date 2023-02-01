<a href="{{route('productmanage_add')}}">เพิ่มสินค้า</a>
<div>
@foreach($product as $product)
{{$product->product_name}}
@endforeach
</div>