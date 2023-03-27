<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="/css/sidebar.css" rel="stylesheet">
<nav id="sidebar">
    <h1 id="title"> เลือกหมวดหมู่ </h1>
    <div id="border"></div>
    <ul id="choose">
        @foreach($sidebarcate as $sidebarcate)
        <li><a href="{{URL('category/'.$sidebarcate->id)}}" id="categorybtn" class="">{{$sidebarcate->name}}</a></li>
        @endforeach
    </ul>
    <script src="/js/sidebar.js"></script>
</nav>