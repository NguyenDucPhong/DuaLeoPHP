@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{mix('css/admin.css')}}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <h2>
            <a href=""><i class='bx bx-lemon' ></i> DuaLeoX</a>
          </h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-user'></i> Chưa đăng nhập
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"><i class='bx bxs-user-circle' ></i> Đăng nhập</a></li>
                </ul>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
   

    <section id="login" class="py-5 ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 mx-auto align-items-center">
            <div class="card" style="width: 100%;">
              <div class="card-title text-center py-3" style="background-color: #98d44a; color:#FFFF">
                <h4>Đăng nhập tài khoản</h4>
              </div>
              <form method="post" action="{{route('login')}}">
                @csrf
                <div class="card-body">
                    <form  class="p-4">
                      <div class="form-group pb-4">
                        <label for="email">Email</label>
                        <input type="" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                        <div class="mt-4 text-center ">
                            <button type="submit" class="login btn btn-success">Đăng nhập</button>
    
                             <a href="{{route('register')}}" class="sign-up btn btn-success">Đăng kí</a>
                        </div>
                    </form>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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