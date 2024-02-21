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
                <li><a href="#">Manage Product</a></li>
                <!-- Add more dropdown items as needed -->
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Order list</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-pie-chart-alt-2"></i>
                <span class="links_name">Analytics</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-coin-stack"></i>
                <span class="links_name">Stock</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-book-alt"></i>
                <span class="links_name">Total order</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-user"></i>
                <span class="links_name">Team</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-message"></i>
                <span class="links_name">Messages</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-heart"></i>
                <span class="links_name">Favrorites</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-cog"></i>
                <span class="links_name">Setting</span>
            </a>
        </li>
        <li class="log_out">
            <a href="#">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>