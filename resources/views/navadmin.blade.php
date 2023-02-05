<link href="/css/navadmin.css" rel="stylesheet">
<link href="/css/app.css" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<nav id="sidebar">
    <header>
        <div id="image-text">
            <span id="image">
                <img src="{{URL('images/logo.png')}}" alt="">
            </span>
            <div id="text header-text">
                <span id="name">
                    Musi Shop
                </span>
                <span id="admin">
                    Admin
                </span>
            </div>
        </div>
    </header>
    <div id="menu-bar">
        <div id="menu">
            <ul id="menu-links">
                <li id="nav-link">
                    <a href="#">
                        <i class='bx bxs-dashboard' id="icon"></i>
                        <span id="text nav-text">แดชบอร์ด</span>
                    </a>
                </li>
                <li id="nav-link">
                    <a href="{{route('productmanage')}}">
                        <i class='bx bx-grid-alt' id="icon"></i>
                        <span id="text nav-text">จัดการคำสินค้า</span>
                    </a>
                </li>
                <li id="nav-link">
                    <a href="{{route('categorymanage')}}">
                        <i class='bx bx-image' id="icon"></i>
                        <span id="text nav-text">หมวดหมู่สินค้า</span>
                    </a>
                </li>
                <li id="nav-link">
                    <a href="#">
                        <i class='bx bx-star' id="icon"></i>
                        <span id="text nav-text">จัดการคำสั่งซื้อ</span>
                    </a>
                </li>
                <li id="nav-link">
                    <a href="#">
                        <i class='bx bx-conversation' id="icon"></i>
                        <span id="text nav-text">การเคลมสินค้า</span>
                    </a>
                </li>
                <li id="nav-link">
                    <a href="#">
                        <i class='bx bx-chat' id="icon"></i>
                        <span id="text nav-text">ติดต่อผู้ขาย</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="bottom-content">
            <form method="POST" action="{{ route('logout') }}" x-data>
                <li>

                    @csrf

                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <i class='bx bx-log-out' id="icon"></i>
                        <span id="text nav-text">ออกจากระบบ</span>
                    </a>


                </li>
            </form>
        </div>
    </div>

</nav>