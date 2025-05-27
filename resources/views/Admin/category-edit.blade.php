@extends('Admin.layout')
@section('title', 'Mixify  | Create Category')

@section('adminContent')
@if (Session::has('alert'))
  <div class="col-md-12">
    <div class="alert alert-warning">
      {{ Session::get('alert') }}
    </div>
  </div>
@endif
<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">Update Your Category</h1>
    <p class="lead">Please Fill Out All Information</p>
  </div>
</div>
<div class="container">
    <div class="row">
      <div><a href="{{ url('category/show') }}" class="btn btn-primary float-end">Show Categories</a></div>
        <div class="col">
            <br><br><br>
            <form method="post" action="{{ route('category.update', $category) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="mb-3">                 
                  <label  class="form-label">Update Category Name</label>
                  <input type="text" value="{{ $category->cat_name}}" class="form-control" name="cat_name" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Update Category Description</label>
                  <input type="text" value="{{ $category->cat_des}}" class="form-control" name="cat_des" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Old Image/Icon</label><br>
                  <img src="{{ asset('Admin/img/cat-images/', $category->cat_img)}}" alt="" height="50px" width="100px">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Update Category Image/Icon</label>
                  <input type="file" class="form-control" name="cat_img" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection