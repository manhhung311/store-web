<div class="sidebar pe-4 pb-3">
    <nav class="navbar navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Quản Lý</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset("img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"></h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin') }}" class="nav-item nav-link active"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('register') }}" class="dropdown-item">Tạo Tài Khoản</a>
                    <a href="{{ route('users') }}" class="dropdown-item">Danh Sách Tài Khoản</a>
                </div>
            </div>

            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Quản Lý Sản Phẩm</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div> --}}


            <a href="{{ route('companys') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Companys</a>
            <a href="{{ route('categorys') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Categorys</a>
            <a href="{{ route("exportBills") }}" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i></i>Exports</a>
            <a href="{{ route("importBills") }}" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i></i>Imports</a>
            <a href="{{ route("products")}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Products</a>
            {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
