@extends('admin.master')
@section('content2')
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
          <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                  <form class="modal-body" method="post" enctype="multipart/form-data" action="{{route('customers.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name">

                    </div>
                    <div class="form-group">
                      <label for="">Gender</label>
                      <select class="form-select" aria-label="Default select example"  name="gender">
                        <option >male</option>
                        <option >female</option>
                      </select>

                    </div>
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control"  name="address">

                    </div>
                    <div class="form-group">
                      <label for="">Phone number</label>
                      <input type="text" class="form-control"  name="phone">
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
          <form method="" action="" class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" value="" aria-label="Search" name="key">
                <div class="input-group-append">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
          </form>
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
              <h2>List of customers</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">ID Customer</th>
                  <th scope="col">total</th>
                  <th scope="col">created at</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                  @if (count($invoices)>0)
                      @foreach ($invoices as $invoice)
                      <tr>
                        <th scope="row">{{$invoice->id}}</th>  
                        <td>{{$invoice->id_customer}}</td>
                        <td>{{$invoice->total}}</td>
                        <td>{{$invoice->created_at}}</td>
                        <td>
                            <a href="">Xem chi tiết</a>
                            <a href="{{route('invoices.create')}}">Thêm hoá đơn</a>
                        </td>

                      </tr>
                      @endforeach
                  @endif
              
              </tbody>
              
            </table>
            {!! $invoices->render('pagination::bootstrap-5') !!}
          </div>
        </div>
      </div>
    </div>
   
  </section>
@endsection