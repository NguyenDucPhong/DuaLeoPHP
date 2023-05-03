<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="/DualeoX-DucPhong/css/bootstrap.min.css">
  <link rel="stylesheet" href="/DualeoX-DucPhong/css/boxicons.min.css">
  <link rel="stylesheet" href="/DualeoX-DucPhong/admin/css/index.css">
  <link rel="stylesheet" href="{{mix('css/admin.css')}}">
</head>

<body onload="render()">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="#">Trang quản trị</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('customers.index')}}">Khách hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./oders.html">Đơn hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./user.html">Tài khoản</a>
          </li>

        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class='bx bxs-user'></i> Xin chào, Admin!
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><i class='bx bxs-user-circle'></i> Thông tin cá nhân</a></li>
              <li><a class="dropdown-item" href="/DualeoX-DucPhong/login.html"><i class='bx bxs-user-x'></i> Logout</a></li>

            </ul>
          </li>


        </ul>
      </div>
    </div>
  </nav>

 @yield('content2');

  <section id="footer" class="my-5 py-5" style="background-color: #80BB35;">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p style="font-size: 20px; color: #FFFF;">
            Copyright © 2022 Admin Panel
          </p>
        </div>
      </div>
    </div>
  </section>



 
  <script src="{{mix('js/admin.js')}}"></script>

</body>

</html>