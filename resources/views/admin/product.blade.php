@extends('admin.master')

@section('content2')
@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif
<header id="main-header" class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <h2>
            <a href=""><i class='bx bx-lemon'></i> DuaLeoX</a>
          </h2>
        </div>
      </div>
    </div>
  </header>

  <section id="search" class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  onclick="fix()">
            <i class='bx bx-plus-medical'></i>
            Add
          </a>
          <div class="modal fade show" id="exampleModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #80BB35; color:#FFFF">
                  <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                  
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="modal-body" method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="name" name="name">

                    </div>
                    <div class="form-group">
                      <label for="">classify</label>
                      <select class="form-select" aria-label="Default select example" id="classify" name="classify">
                        <option >Rau củ</option>
                        <option >Hoa quả</option>
                        <option>Thịt</option>
                        <option >Hải sản</option>
                      </select>

                    </div>
                    <div class="form-group">
                      <label for="">Origin</label>
                      <input type="text" class="form-control" id="origin" name="origin">

                    </div>
                    <div class="form-group">
                      <label for="">image</label>
                      <div class="input-group">
                        <input type="file" class="form-control" id="image" name="image">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Amount</label>
                      <input type="number" class="form-control" id="amount" name="quantity">
                    </div>
                  
                   
                    <div class="form-group">
                      <label for="">Price</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="price"
                          aria-label="Dollar amount (with dot and two decimal places)" name="price">
                        <span class="input-group-text">₫</span>
                      </div>

                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" id="add1" class="btn btn-success" >Add</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ms-auto">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="Tìm kiếm"
              aria-label="Dollar amount (with dot and two decimal places)">
            <span class="input-group-text" style="background-color: #80BB35; color:#FFFF"><i
                class='bx bx-search'></i></span>
          </div>
        </div>



      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-title text-center py-2">
              <h2>List of products</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Image</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Classify</th>
                  <th scope="col">Origin</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Price</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                  @if (count($data)>0)
                      @foreach ($data as $row)
                      <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td><img src="{{asset('images/'.$row->image)}}" style="width: 60px; height: 60px;"></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->classify}}</td>
                        <td>{{$row->origin}}</td>
                        <td>{{$row->quantity}}</td>
                        <td>{{$row->price}}</td>
                        <td>
                          <form action="{{ route('products.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('products.edit', $row->id)}}"  class="btn btn-primary btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="delete">
                          </form>
                        </td>

                      </tr>
                      @endforeach
                  @endif
              
              </tbody>
              
            </table>
            {!! $data->render('pagination::bootstrap-5') !!}
          </div>
        </div>
      </div>
    </div>
   
  </section>
@endsection