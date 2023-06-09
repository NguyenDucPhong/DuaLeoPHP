<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DualeoX - Giao diện bán hàng tốt nhất Haravan</title>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

    <!-- Header -->
    <div id="header">

        <div class="top-nav">
            <div class="container">
                <div class="row ">
                    <div class="col-9 px-3">
                        <ul class="list-inline d-flex gap-4">
                            <li>

                                <i class='bx bxs-mobile'> Hotline: </i>

                                <span>0978660288</span>
                            </li>
                            <li>

                                <i class='bx bx-location-plus'> Địa chỉ: </i>
                                <span>268 Cầu Giấy, Quận Cầu Giấy, Hà Nội, Vietnam</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-3 ">
                        <ul class="list-inline d-flex gap-2 justify-content-end">
                            <li>
                                <a href="{{route('login')}}">
                                    <i class='bx bxs-user'></i>
                                    Đăng nhập
                                </a>
                            </li>
                            <li>
                                <span>Hoặc</span>
                            </li>
                            <li>
                                <a href="{{route('register')}}">
                                    Đăng ký
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-nav-mobile top-nav">
            <div class="container">
                <div class="row text-center">
                    <div class="col-auto mx-auto ">
                        <ul class="list-inline">
                            <li>

                                <i class='bx bxs-mobile'> Hotline: </i>
                                <span>0978660288</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-content p-3 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-2 icon-nav">
                        <button class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class='bx bx-menu' ></i>
                          </button>
                    </div>
                    <div class="col-auto col-md-8 col-lg-3  p-0 logo">
                        <a href="{{route('guests.index')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
                    </div>
                    <div class="icon-cart-mobile col-auto col-md-2">
                        <a href="./cart.html"><i class='bx bxs-shopping-bag'></i></a>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-7 policy">
                        <div class="policy d-flex justify-content-around">
                            <div class="item-polyci d-flex align-items-center">
                                <img src="{{asset('images/van_chuyen.png')}}" alt="">
                                <div class="">
                                    <a href="">Miễn phí vận chuyển</a>
                                    <p>Bán kính 100 km</p>
                                </div>
                            </div>
                            <div class="policy d-flex justify-content-center">
                                <div class="item-polyci d-flex align-items-center">
                                    <img src="{{asset('images/ho_tro.png')}}" alt="">
                                    <div class="">
                                        <a href="">Hỗ trợ 24/7</a>
                                        <p>Hotline: 19001009</p>
                                    </div>
                                </div>

                            </div>
                            <div class="policy d-flex justify-content-center">
                                <div class="item-polyci d-flex align-items-center">
                                    <img src="{{asset('images/gio.png')}}" alt="">
                                    <div class="">
                                        <a href="">Giờ làm việc</a>
                                        <p>T2 - T7 Giờ hành chính</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-1 col-lg-2 icon-cart">
                        <a href="{{route('cart')}}" class="btn btn-brand"  ><i class='bx bxs-shopping-bag'></i> Giỏ hàng
                            (<span>{{count((array) session('cart'))}}</span>)</a>
                    </div>
                   
                </div>           
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container ">
                <div class="menu ">
                    <ul class="align-items-center navbar-nav me-auto mb-2 mb-lg-0">
                        <li>
                            <a class="active" href="">Trang chủ <i class='bx bx-chevron-right'></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">Trang chủ kiểu 1</a></li>
                                <li><a href="#">Trang chủ kiểu 2</a></li>
                                <li><a href="#">Trang chủ kiểu 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Sản phẩm <i class='bx bx-chevron-right'></i></a>
                            <div class="sub-menu2 ">
                                <ul class="level10">
                                    <li>

                                        <ul>
                                            <li>
                                                <h4>
                                                    <a href="#vegetable">
                                                        <span>Rau củ</span>
                                                    </a>
                                                </h4>
                                            </li>
                                            <li><a href="#vegetable">Rau củ sách</a></li>
                                            <li><a href="#vegetable">Rau củ Đà Lạt</a></li>
                                            <li><a href="#vegetable">Rau củ nhập khẩu</a></li>
                                            <li><a href="#vegetable">Rau củ theo mùa</a></li>
                                        </ul>
                                    </li>

                                    <li>

                                        <ul>
                                            <li>
                                                <h4>
                                                    <a href="#fruit">
                                                        <span>Hoa quả</span>
                                                    </a>
                                                </h4>
                                            </li>
                                            <li><a href="#fruit">Hoa quả Úc</a></li>
                                            <li><a href="#fruit">Hoa quả miền nam</a></li>
                                            <li><a href="#fruit">Hoa quả theo mùa</a></li>
                                            <li><a href="#fruit">Hoa quả nhập khẩu</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <h4>
                                                    <a href="#dry-food">
                                                        <span>Thịt</span>
                                                    </a>
                                                </h4>
                                            </li>
                                            <li><a href="#dry-food">Thịt bò Mỹ</a></li>
                                            <li><a href="#dry-food">Thịt đà điểu</a></li>
                                            <li><a href="#dry-food">Thịt heo sạch</a></li>
                                            <li><a href="#dry-food">Thịt các loại</a></li>
                                        </ul>
                                    </li>
                                    <li>

                                        <ul>
                                            <li>
                                                <h4>
                                                    <a href="#dry-food">
                                                        <span>Hải sản</span>
                                                    </a>
                                                </h4>
                                            </li>
                                            <li><a href="#dry-food">Tôm hùm Alsaka</a></li>
                                            <li><a href="#dry-food">Tôm hùm Canada</a></li>
                                            <li><a href="#dry-food">Kingcrab</a></li>
                                            <li><a href="#dry-food">Hải sản</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Demo tuỳ chọn</a></li>
                    </ul>

                </div>
                <div class="col-3 ms-auto">
                    <div class="menu-search">
                        <form action="">
                            <input type="text" class="input" id="search" placeholder="Tìm sản phẩm">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="navbar-mobile">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                <div class="form-group">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                        <a href="{{route('login')}}"><i class='bx bxs-user' ></i> Đăng nhập</a>
                        <span> hoặc</span>
                        <a href="{{route('register')}}"> đăng ký</a>
                      </h5>
                      <div class="input-group mt-3" style="width:350px">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm"
                          aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text"><i class='bx bx-search' ></i></span>
                      </div>
                </div>
                  <button type="button" class="btn-close text-reset mb-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  
                </div>
                <div class="offcanvas-body">
                  
                  <div class="dropdown mt-3">
                    <ul class="list-inline">
                        <li>
                            MENU
                        </li>
                        <li>
                            <a href="" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Trang chủ</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Trang chủ 1</a></li>
                                <li><a class="dropdown-item" href="#">Trang chủ 2</a></li>
                                <li><a class="dropdown-item" href="#">Trang chủ 3</a></li>
                            </ul>
                        </li>
                        <li><a href="">Sản phẩm</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Liên hệ</a></li>
                        <li><a href="">Demo tuỳ chọn</a></li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>
       
    </div>

   @yield('content')

   <section id="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h5>Liên hệ</h5>
                                <ul>
                                    <li>
                                        <p>Chúng tôi chuyên cung cấp các sản phẩm, thực phẩm sạch an toàn cho sức khoẻ con người</p>
                                    </li>
                                    <li>
                                        <i class='bx bxs-location-plus'></i>
                                        <p>268 Cầu Giấy, Quận Cầu Giấy, Hà Nội, Vietnam</p>
                                    </li>
                                    <li>
                                        <i class='bx bxs-phone-call' ></i>
                                        <p>0912117494
                                            Thứ 2 - Chủ nhật: 9:00 - 18:00</p>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope' ></i>
                                        <p>dualeotheme@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h5>Danh mục</h5>
                                <ul>
                                    <li><a href="">Trang chủ</a></li>
                                    <li><a href="">Sản phẩm</a></li>
                                    <li><a href="">Tin tức</a></li>
                                    <li><a href="">Giới thiệu</a></li>
                                    <li><a href="">Liên hệ</a></li>
                                    <li><a href="">Demo tuỳ chọn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h5>Hỗ trợ khách hàng</h5>
                                <ul>
                                    <li><a href="">Trang chủ</a></li>
                                    <li><a href="">Sản phẩm</a></li>
                                    <li><a href="">Tin tức</a></li>
                                    <li><a href="">Giới thiệu</a></li>
                                    <li><a href="">Liên hệ</a></li>
                                    <li><a href="">Demo tuỳ chọn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h5>KẾT NỐI VỚI DUALEO</h5>
                                <a href=""><img src="./images/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>