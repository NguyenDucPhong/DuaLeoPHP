@extends('admin')
@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif
@section('content2')
<section id="login" class="py-5 ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mx-auto align-items-center">
          <div class="card" style="width: 100%;">
            <div class="card-title text-center py-3" style="background-color: #98d44a; color:#FFFF">
              <h4>Đăng ký tài khoản</h4>
            </div>
            <div class="card-body">
              <form  class="p-2" method="post" action="{{route('register')}}">
                @csrf
                <div class="form-group p-2">
                  <label for="username">Họ và tên</label>
                  <input type="" class="form-control" name="name">
                </div>
                <div class="form-group p-2">
                  <label for="email">Email</label>
                  <input type="" class="form-control" name="email">
                </div>
                <div class="form-group p-2">
                  <label for="password">Mật khẩu</label>
                  <input  class="form-control" type="password" name="password">
                </div>
                <div class="form-group p-2">
                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>
                  <div class="mt-4 text-center ">
                    <button type="submit" class="sign-up btn btn-success" >Đăng kí</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection