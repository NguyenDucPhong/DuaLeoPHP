@extends('master')

@section('content')
{{-- {{dd($product)}} --}}
    <section class="bread-crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline d-flex">
                        <li>
                            <a href="">Trang chủ </a>
                            <span><i class='bx bx-chevron-right'></i></span>
                        </li>
                        <li>
                            <a href="">Demo </a>
                            <span><i class='bx bx-chevron-right'></i></span>
                        </li>
                        <li>
                            <span>{{$product->name}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class=""><img src="{{asset('images/'.$product->image)}}" alt=""></div>
                        </div>
                        <div class="col-lg-7">
                            <h3>{{$product->name}}</h3>
                            <div class="status">
                                Trạng thái: 
                                <span>
                                    <i class='bx bx-check'></i>
                                    Còn hàng
                                </span>
                            </div>
                            <div class="price">
                                {{-- <div class="special-price">
                                    <span>{400.000}đ</span>
                                </div> --}}
                                <div class="old-price">
                                    <span>{{$product->price}}đ</span>
                                    {{-- <p> 460.000đ</p>
                                    <span>(-13%)</span> --}}
                                </div>
                            </div>
                            <div class="product-summary">
                                Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe,...
                            </div>
                            <div class="form-product">
                                <form action="">
                                    <label for="">Số lượng: </label>
                                    <div class="custom custom-btn-number">
                                        <input aria-label="quantity" style="width: 80px; height: 42px;" class="input-qty" placeholder="1"
                                    type="number">
                                    </div>
                                    <button class="btn">Đặt hàng Ngay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-tab">
                                <ul class="tabs tabs-title list-inline d-flex gap-4">
                                    <li ><a href="#" class="tab-link current"><span>Mô tả</span></a></li>
                                    <li ><a href="#" class="tab-link"><span>Thông tin</span></a></li>
                                </ul>
                                <div class="tab-1 tab-content current">Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe, tốt cho tim mạch, ngăn ngừa tiến trình bệnh tiểu đường.   Cũng như Táo, Nho của Mỹ, Úc… đều được bảo quản trong môi trường lạnh đặc biệt từ khi hái, không chất bảo quản và các chất gây hại cho sức khỏe. </div>
                                <!-- <div class="tab-2 tab-content current">Các nội dung Hướng dẫn mua hàng viết ở đây</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-product mt-4">
        <div class="container">
            <div class="section-title text-center">
                <h5 title="Sản phẩm liên quan">
                    <a href="">SẢN PHẨM LIÊN QUAN</a>
                </h5>
                <p>Có phải bạn đang tìm những sản phẩm dưới đây
                    </p>
            </div>
            <div class="section-content">
                <div class="list-card">
                    <div class="row text-center ">
                        <div class="owl-carousel owl-theme" id="list-fruit">
                            
                          @if (count($data)>0)
                              @foreach ($data  as $row)
                                <div class="col-3">
                                    <div class="card" style="width: 12rem;">
                                        <a href="{{route('guests.show', $row->id)}}" title="{{$row->name}}"><img src="{{asset('images/'.$row->image)}}" class="card-img-top" alt="...">
                                            <p class="card-text">{{$row->name}}</p></a>
                                        <div class="card-body">
                                        
                                            <span>{{$row->price}}₫</span>
                                        </div>
                                        <div class="over-lay"></div>
                                        <div class="add text-center">
                                            <a href=""><i class='bx bxs-shopping-bag'></i></a>
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
    </section>
@endsection