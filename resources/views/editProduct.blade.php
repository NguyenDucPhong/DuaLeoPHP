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
    <div class="container">
        <div style="color: #80BB35; text-align: center">
            <h2>Edit Product</h2>
        </div>
        <form method="post"  action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
        
            </div>
            <div class="form-group">
              <label for="">Classify</label>
              <select class="form-select" aria-label="Default select example" id="classify" name="classify" aria-valuetext="">
                <option >Rau củ</option>
                <option >Hoa quả</option>
                <option>Thịt</option>
                <option >Hải sản</option>
              </select>
        
            </div>
            <div class="form-group">
              <label for="">Origin</label>
              <input type="text" class="form-control" id="origin" name="origin" value="{{$product->origin}}">
            </div>
            <div class="form-group">
              <label for="">image</label>
              <div class="input-group">
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{ asset('images/' . $product->image) }}" width="70"  />
                <input type="hidden" name="hidden_image" value="{{ $product->image }}" />
              </div>
            </div>
            <div class="form-group">
              <label for="">Amount</label>
              <input type="number" class="form-control" id="amount" name="quantity" value="{{$product->quantity}}">
            </div>
          
           
            <div class="form-group">
              <label for="">Price</label>
              <div class="input-group">
                <input type="text" class="form-control" id="price"
                  aria-label="Dollar amount (with dot and two decimal places)" name="price" value="{{$product->price}}">
                <span class="input-group-text">₫</span>
              </div>
        
            </div>
        
            <div class="modal-footer">
              <input type="hidden" name="hidden_id" value="{{ $product->id }}" />
              <input type="submit"  class="btn btn-success" value="Save">
            </div>
          </form>
    </div>

    <script>
        document.getElementsByName('classify')[0].value = "{{ $product->classify }}";
    </script>
@endsection