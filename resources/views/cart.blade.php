@extends('master')

@section('content')
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
                            <span>Giỏ hàng của bạn - DuaLeoX</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="main-cart-page main-container">
        <div class="main container">
            <form action="" class="form-cart">
               <table class="table">
                   <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Phân loại</th>
                            <th scope="col">Xuất xứ</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Xoá</th>
                        </tr>
                   </thead>
                   <tbody>
                        @php
                            $index =1;
                            $total = 0;
                        @endphp
                       @if (session('cart'))
                           @foreach (session('cart') as $id => $detail)
                           @php
                               $total += $detail['price'] * $detail['quantity'];
                           @endphp
                            <tr>
                                <th scope="row">{{$index++}}</th>
                                <td ><img style="width: 80px" src="{{asset('images/'.$detail['image'])}}" alt=""></td>
                                <td>{{$detail['product_name']}}</td>
                                <td>{{$detail['classify']}}</td>
                                <td>{{$detail['origin']}}</td>
                                <td>{{$detail['price']}}</td>
                                <td><input type="number" value="{{$detail['quantity']}}" style="width: 60px"></td>
                                <td><button class="btn btn-danger" style="height: 35px;"><i class='bx bx-trash'></i></button></a></td>
                            </tr>
                           @endforeach
                       @endif
                   </tbody>
                   <tfoot>
                        <tr>
                            <td colspan="10" class="text-end"><h5><strong>Tổng tiền: {{$total}}đ</strong></h5></td>
                        </tr>
                        <tr >
                            <td colspan="10" class="text-end">
                                <a href="{{route('guests.index')}}" class="btn btn-light" style="border-bottom-color: #80BB35">Tiếp tục mua hàng</a>
                                <button class="btn btn-success">Tiến hành đặt hàng</button>
                            </td>
                        </tr>
                   </tfoot>
               </table>
            </form>
        
        </div>
        <div class="cart-mobile container ">
            <div class="cart-title">
                <h5>GIỎI HÀNG CỦA BẠN</h5>
            </div>
            <form action="">
                <div class="cart-content">
                    <div class="content-product-list">
                    <div class="item-product-cart" style="border-bottom: 1px solid rgba(210, 205, 205, 0.358);">
                        <div class="item-product" style="width:100px">
                            <a href=""><img src="./images/ChanhDayDoUc.webp" alt=""></a>
                        </div>
                        <div class="title-product">
                            <a href="">Chanh dây đỏ Úc</a>
                            <p>
                                Giá: 
                                <span>400.000đ</span>
                            </p>
                        </div>
                        <div class="select-qty text-center">
                            <div class="input-sl ">
                                <input aria-label="quantity" style="width: 50px" class="input-qty" placeholder="1"
                                    type="number">
                            </div>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                    <div class="item-product-cart" style="border-bottom: 1px solid rgba(210, 205, 205, 0.358);">
                        <div class="item-product" style="width:100px">
                            <a href=""><img src="./images/DuaLeoDaLat.webp" alt=""></a>
                        </div>
                        <div class="title-product">
                            <a href="">Dưa leo đà lạt</a>
                            <p>
                                Giá: 
                                <span>65.000đ</span>
                            </p>
                        </div>
                        <div class="select-qty text-center">
                            <div class="input-sl ">
                                <input aria-label="quantity" style="width: 50px" class="input-qty" placeholder="1"
                                    type="number">
                            </div>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                    <div class="item-product-cart" style="border-bottom: 1px solid rgba(210, 205, 205, 0.358);">
                        <div class="item-product" style="width:100px">
                            <a href=""><img src="./images/HongDoMy.webp" alt=""></a>
                        </div>
                        <div class="title-product">
                            <a href="">Hồng đỏ Mỹ</a>
                            <p>
                                Giá: 
                                <span>150.000đ</span>
                            </p>
                        </div>
                        <div class="select-qty text-center">
                            <div class="input-sl ">
                                <input aria-label="quantity" style="width: 50px" class="input-qty" placeholder="1"
                                    type="number">
                            </div>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                    
                    </div>
                </div>
                <div class="cart-price mt-4">
                    <div class="cart-title d-flex justify-content-between">
                        <p>TỔNG TIỀN: </p>
                        <a href="" style="text-decoration: none; color: #80BB35; font-weight: 500;">615.000đ</a>
                    </div>
                </div>
                <div class="checkout">
                    <button class="btn btn-success mb-2"><span>Tiến hành thanh toán</span></button>
                    <button class="btn btn-success mb-4"><span>Tiến hành mua hàng</span></button>
                </div>
            </form>
        </div>S
    </section>
@endsection