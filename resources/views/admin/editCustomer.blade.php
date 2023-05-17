@extends('admin.master')
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
            <h2>Edit customer</h2>
        </div>
        <form method="post"  action="{{route('customers.update', $customer->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="">Customer name</label>
              <input type="text" class="form-control" name="name" value="{{$customer->name}}">
        
            </div>
            <div class="form-group">
              <label for="">Gender</label>
              <select class="form-select" aria-label="Default select example" name="gender" aria-valuetext="">
                <option >male</option>
                <option >famale</option>
            
              </select>
        
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" class="form-control"name="address" value="{{$customer->address}}">
            </div>
         
            <div class="form-group">
              <label for="">Phone number</label>
              <input type="text" class="form-control" name="phone" value="{{$customer->phone}}">
            </div>
          
        
            <div class="modal-footer">
              <input type="hidden" name="hidden_id" value="{{ $customer->id }}" />
              <input type="submit"  class="btn btn-success" value="Save">
            </div>
          </form>
    </div>

    <script>
        document.getElementsByName('gender')[0].value = "{{ $customer->gender }}";
    </script>
@endsection