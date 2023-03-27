<x-app-layout>
<a href="{{route('dashboard')}}">กลับ</a>
<div>
@foreach($categories as $category)
    {{$category->name}}
@endforeach
</div>
</x-app-layout>