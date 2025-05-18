@extends('Admin.layout')
@section('title', 'Admin | Add Songs')

@section('adminContent')

<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">Add Songs</h1>
    <p class="lead">Please Fill Out All Information</p>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br><br>
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Song Title</label>
                  <input type="text" class="form-control" name="pro_name" required>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Song Description</label>
                  <input type="text" class="form-control" name="pro_des" required>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Song Category</label><br>
                  <select name="catId" class="form-label" style="height: 40px; width: 250px; border-radius: 8px;" required>
                    <option value="">Select Category</option>
                    @foreach ($res as $user)
                    <option value="{{ $user->cat_id}}">{{ $user->cat_name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px;">Song Image/Icon </label>
                  <input type="file" class="form-control" name="pro_image" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection