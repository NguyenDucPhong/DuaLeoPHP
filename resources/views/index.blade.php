@extends('master');

@section('content')
        <!-- Slider -->
        <section id="slider">
            <div class="container mt-4">
                <div class="row justify-content-around tablet">
                    <div class="list-food col-lg-3 col-md-12">
                        <div class="title text-center">
                            <h5 class="head-title"><span>Danh mục</span></h5>
                        </div>
                        <div class="food">
                            <ul>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Rau tươi sạch</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Thịt tươi sạch</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Hải sản tươi sống</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Hải sản nhập khẩu</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Trái cây miền nam</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Hoa quả sạch</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Rau quả Đà Lạt</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Rau quả nước ngoài</a></li>
                                <li><i class='bx bxs-right-arrow-circle'></i><a href="">Tất cả sản phẩm</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="carouselExampleCaptions" class="carousel slide col-md-12 col-lg-8" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
    
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/slider_1.jpg" class=" w-100" alt="...">
    
                            </div>
                            <div class="carousel-item">
                                <img src="./images/slider_1.jpg" class=" w-100" alt="...">
    
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="banner">
            <div class="banner">
                <div class="container">
                    <div class="row justify-content-around">
                       <div class=" owl-carousel owl-theme" id="banner2">
                        <div class="col-lg-4 col-xs-auto item" >
                            <img src="./images/banner1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-xs-auto item" >
                            <img src="./images/banner2.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-xs-auto item" >
                            <img src="./images/banner3.jpg" alt="">
                        </div>
                       </div>
                       
                    </div>
                </div>
            </div>
            
        </section>
    
        <section id="fruit">
            <div class="fruit">
                <div class="container">
                    <div class="row justify-content-between align-items-center content">
                        <div class="col-auto ">
                            <div class="section-title p-2 px-4 ">
                                <h4>Trái cây mỗi ngày</h4>
                            </div>
                               
                        </div>
                        <div class="col-auto">
                            <ul class="tabs tabs-title-mobile">
                                <li><i class='bx bx-chevron-left' ></i></li>
                                <li><span>Rau tươi sạch</span></li>
                                <li><i class='bx bx-chevron-right' ></i></li>
                            </ul>
                            <ul class="tabs tabs-title">
                                <li class=""><a href="">Rau tươi sạch</a></li>
                                <li><a href="">Thịt tươi sạch</a></li>
                                <li><a href="">Hải sản tươi sống</a></li>
                                <li><a href="">Hàng nhập khẩu</a></li>
                                <li><a href="">Trái cây miền nam</a></li>
                            </ul>
                        </div>
                        <div class="list-card">
                                <div class="row text-center ">
                                    <div class="owl-carousel owl-theme" id="list-fruit">
                                        <div class="col-3 ">
                                            <div class="card" style="width: 12rem;">
                                                <a href="./details.html" title="Chanh dây đỏ Úc">
                                                    <img src="./images/ChanhDayDoUc.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Chanh dây đỏ Úc</p>
                                                </a>
                                                
                                                <div class="card-body d-flex justify-content-around">
                                                    
                                                    <div class="special-price">
                                                        <span>400.000₫</span>
                                                    </div>
                                                    <div class="old-price">
                                                        460.000₫
                                                    </div>
                                                    
                                                </div>
                                                <div class="discount">-13%</div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail" data-bs-toggle="modal" data-bs-target="#chanhday"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Dưa leo Đà Lạt">
                                                    <img src="./images/DuaLeoDaLat.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Dưa leo Đà Lạt</p>
                                                </a>
                                                <div class="card-body">
                                                    
                                                    <span>65.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#dualeo"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Hành tây"><img src="./images/HanhTay.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Hành tây</p></a>
                                                
                                                <div class="card-body">
                                                  
                                                    <span>50.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#hanhtay"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Hồng đỏ Mỹ"> <img src="./images/HongDoMy.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Hồng đỏ Mỹ</p></a>
                                                
                                                <div class="card-body">
                                                   
                                                    <span>150.000₫</span>
                                                </div>
                                                
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#hong"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Nho Đà Lạt"><img src="./images/NhoDaLat.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Nho Đà Lạt</p></a>
                                               
                                                <div class="card-body">
                                                   
                                                    <span>400.000₫</span>
                                                    
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#nho"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Quả kiwi xanh"><img src="./images/QuaKiwiXanh.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Quả Kiwi xanh</p></a>
                                          
                                                <div class="card-body">
                                                    
                                                    <span>250.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#kiwi"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Táo đỏ Mỹ"><img src="./images/TaoDoMy.webp" class="card-img-top" alt="...">
                                                 <p class="card-text">Táo đỏ Mỹ</p>
                                                </a>
                                                <div class="card-body d-flex justify-content-around">
                                                    <div class="special-price">
                                                        <span>120.000₫</span>
                                                    </div>
                                                    <div class="old-price">
                                                        180.000₫
                                                    </div>
                                                </div>
                                                <div class="discount">-33%</div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#taodo"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Táo Queen New Zealand"><img src="./images/TaoQueen.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Táo New Zealand</p></a>
                                                <div class="card-body">
                                                   
                                                    <span>150.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="#" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href="#" class="detail"  data-bs-toggle="modal" data-bs-target="#taoqueen"><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                        </div>
                       
                        
                    </div>
                </div>
               
            </div>
        </section>
    
        <section id="vegetable">
            <div class="vegetable">
                <div class="container">
                    <div class="row justify-content-between align-items-center content">
                        <div class="col-auto ">
                            <div class="section-title p-2 px-4 ">
                                <h4>Rau tươi mới</h4>
                            </div>
                               
                        </div>
                        <div class="col-auto">
                            <ul class="tabs tabs-title-mobile">
                                <li><i class='bx bx-chevron-left' ></i></li>
                                <li><span>Rau tươi sạch</span></li>
                                <li><i class='bx bx-chevron-right' ></i></li>
                            </ul>
                            <ul class="tabs tabs-title">
                                <li class=""><a href="">Rau tươi sạch</a></li>
                                <li><a href="">Thịt tươi sạch</a></li>
                                <li><a href="">Hải sản tươi sống</a></li>
                                <li><a href="">Hàng nhập khẩu</a></li>
                                <li><a href="">Trái cây miền nam</a></li>
                            </ul>
                        </div>
                        <div class="list-card">
                                <div class="row text-center ">
                                    <div class="owl-carousel owl-theme" id="list-vegetable">
                                        <div class="col-3 ">
                                            <div class="card" style="width: 12rem;">
                                                <a href="./details.html" title="Chanh dây đỏ Úc">
                                                    <img src="./images/ChanhDayDoUc.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Chanh dây đỏ Úc</p>
                                                </a>
                                                
                                                <div class="card-body d-flex justify-content-around">
                                                    
                                                    <div class="special-price">
                                                        <span>400.000₫</span>
                                                    </div>
                                                    <div class="old-price">
                                                        460.000₫
                                                    </div>
                                                    
                                                </div>
                                                <div class="discount">-13%</div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Dưa leo Đà Lạt">
                                                    <img src="./images/DuaLeoDaLat.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Dưa leo Đà Lạt</p>
                                                </a>
                                                <div class="card-body">
                                                    
                                                    <span>65.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Hành tây"><img src="./images/HanhTay.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Hành tây</p></a>
                                                <div class="card-body">
                                                    
                                                    <span>50.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Hồng đỏ Mỹ"> <img src="./images/HongDoMy.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Hồng đỏ Mỹ</p></a>
                                                <div class="card-body">
                                                    
                                                    <span>150.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Nho Đà Lạt"><img src="./images/NhoDaLat.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Nho Đà Lạt</p></a>
                                                <div class="card-body">
                                                    
                                                    <span>400.000₫</span>
                                                    
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Quả kiwi xanh"><img src="./images/QuaKiwiXanh.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Quả Kiwi xanh</p></a>
                                                <div class="card-body">
                                                   
                                                    <span>250.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Táo đỏ Mỹ"><img src="./images/TaoDoMy.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Táo đỏ Mỹ</p></a>
                                                    <div class="card-body d-flex justify-content-around">
                                                        <div class="special-price">
                                                            <span>120.000₫</span>
                                                        </div>
                                                        <div class="old-price">
                                                            180.000₫
                                                        </div>
                                                    </div>
                                                    <div class="discount">-33%</div>
                                                    <div class="over-lay"></div>
                                                    <div class="add text-center">
                                                        <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                        <a href=""><i class='bx bx-show'></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 12rem;">
                                                <a href="" title="Táo Queen New Zealand"><img src="./images/TaoQueen.webp" class="card-img-top" alt="...">
                                                    <p class="card-text">Táo Queen New Zealand</p></a>
                                                <div class="card-body">
                                                    
                                                    <span>150.000₫</span>
                                                </div>
                                                <div class="over-lay"></div>
                                                <div class="add text-center">
                                                    <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                    <a href=""><i class='bx bx-show'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="banner-coltab">
            <div class="container">
                <div class="row banner-coltab">
                        <img src="./images/banner_coltab2_1.png" alt="">   
                </div>
            </div>
        </section>
    
        <section id="dry-food">
            <div class="dry-food">
                <div class="container">
                    <div class="row justify-content-between align-items-center content">
                        <div class="col-auto ">
                            <div class="section-title p-2 px-4 ">
                                <h4>Thực phẩm khô</h4>
                            </div>
                               
                        </div>
                        <div class="col-auto">
                            <ul class="tabs tabs-title-mobile">
                                <li><i class='bx bx-chevron-left' ></i></li>
                                <li><span>Rau tươi sạch</span></li>
                                <li><i class='bx bx-chevron-right' ></i></li>
                            </ul>
                            <ul class="tabs tabs-title">
                                <li class=""><a href="">Rau tươi sạch</a></li>
                                <li><a href="">Thịt tươi sạch</a></li>
                                <li><a href="">Hải sản tươi sống</a></li>
                                <li><a href="">Hàng nhập khẩu</a></li>
                                <li><a href="">Trái cây miền nam</a></li>
                            </ul>
                        </div>
                        <div class="list-card">
                                <div class="text-center">
                                    <div class="row list-dryfood " id="list-dryfood">
                                       @if (count($data)>0)
                                           @foreach ($data as $row)
                                                <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-3">
                                                    <div class="card" style="width: 13rem;">
                                                        <a href="" title="Táo Queen New Zealand"><img src="{{asset('images/'.$row->image)}}" class="card-img-top" alt="...">
                                                            <p class="card-text">{{$row->name}}</p></a>
                                                        <div class="card-body">
                                                        
                                                            <span>{{$row->price}}₫</span>
                                                        </div>
                                                        <div class="over-lay"></div>
                                                        <div class="add text-center">
                                                            <a href="" class="add-cart"><i class='bx bxs-shopping-bag'></i></a>
                                                            <a href=""><i class='bx bx-show'></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                           @endforeach
                                       @endif
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="banner-coltab2">
            <div>
                <div class="container">
                    <div class="row banner-coltab2">
                        <div class="col-md-6 col-xs-12">
                            <img src="./images/banner_coltab3_1.png" alt="">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <img src="./images/banner_coltab3_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
       <section id="blog">
            <div class="section section-blog">
                <div class="container">
                    <div class="section-title text-center">
                        <h4 title="Tin cập nhật">
                            <a href="">Tin cập nhật</a>
                        </h4>
                        <p>Tin tức vệ sinh an toàn thực phẩm cập nhật mới nhất<br>
                            mỗi ngày cho bạn
                            </p>
                    </div>
                    <div class="section-content">
                        <div class="blog-slider">
                            <div class="owl-carousel owl-theme text-center" id="blog-slider">
                                <div class="card" >
                                    <img src="./images/blog-img-2_large.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">Tự chế món thạch sữa chua thanh long lung linh sắc màu</a>
                                      <p class="card-text pt-1">Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc...</p>
                                      <a href="#" class="btn btn-primary">Chi tiết</a>
                                    </div>
                                  </div>
                                  <div class="card" >
                                    <img src="./images/blog-img-3_large.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</a>
                                        <p class="card-text pt-1">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện...</p>
                                      <a href="#" class="btn btn-primary">chi tiết</a>
                                    </div>
                                  </div>
                                  <div class="card" >
                                    <img src="./images/blog-img-5_large.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">Vì sao hoa quả Việt thất thế trước “cơn lốc” hàng nhập ngoại?</a>
                                        <p class="card-text pt-1">Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trên thị trường quốc tế khi nhiều mặt hàng đã có “visa” vào các thị trường khó tính như Mỹ,…...</p>
                                      <a href="#" class="btn btn-primary">chi tiết</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    
       <section id="feedback">
            <div class="section-feedback">
                <div class="container">
                    <div class="section-title text-center">
                        <h4 title="Tin cập nhật">
                            <a href="">Phản hồi của khách</a>
                        </h4>
                        <p>Phản hồi của những khách hàng đã và đang sử dụng<br> sản 
                            phẩm trong suốt những năm qua
                            </p>
                    </div>
                    <div class="section-content">
                        <div class="feedback-slider">
                            <div class="owl-carousel owl-theme text-center" id="feedback-slider">
                                <div class="card" >
                                    <img src="./images/testimonial_1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Người mẫu-Ngọc Trinh</h5>
                                      <p class="card-text">Là một người dùng khó tính, tôi luôn lựa chọn những thức phẩm sạch nhất. Và đây là nơi tôi đặt niềm tin</p>
                                    </div>
                                  </div>
                                  <div class="card" >
                                    <img src="./images/testimonial_2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Diễn viên-Phương Trinh</h5>
                                      <p class="card-text">Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọng niềm tin</p>
                                      
                                    </div>
                                  </div>
                                  <div class="card" >
                                    <img src="./images/testimonial_3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Ca sĩ-Hoàng Yến</h5>
                                      <p class="card-text">Là một người dùng khó tính, tôi luôn lựa chọn những thức phẩm sạch nhất. Và đây là nơi tôi đặt niềm tin</p>
                                      
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    
@endsection

