<div class="sidebar">
    <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('Dashboard')}}" class="active">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="#">
                <i class="bx bx-box"></i>
                <span class="links_name">Product</span>
                <i class='bx bx-chevron-right'></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{route('product')}}">Add Pruduct</a></li>
                <li><a href="{{route('showproduct')}}">Manage Product</a></li>
                <!-- Add more dropdown items as needed -->
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">
                <i class="bx bx-box"></i>
                <span class="links_name">Category</span>
                <i class='bx bx-chevron-right'></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{route('addcategory')}}">Add Category</a></li>
                <!-- Add more dropdown items as needed -->
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">
                <i class="bx bx-box"></i>
                <span class="links_name">Brand</span>
                <i class='bx bx-chevron-right'></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{route('addbrand')}}">Add Brand</a></li>
                <li><a href="{{route('addcategory')}}">Manage Brand</a></li>
                <!-- Add more dropdown items as needed -->
            </ul>
        </li>

        <li class="log_out">
            <a href="#">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>