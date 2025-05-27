@extends('Admin.layout')
@section('title', 'Mixify  | All Category')

@section('adminContent')
@if (Session::has('success'))
  <div class="col-md-12">
    <div class="alert alert-success">
      {{ Session::get('success') }}
    </div>
  </div>
@endif
<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">All Category</h1>
    <p class="lead">Show All Categories</p>
  </div>
</div>
<div class="container">
    <div class="row">
           <div><a href="{{ url('category/create') }}" class="btn btn-primary float-end">Create Categories</a></div>
        <div class="col">
            <br><br>
            <table class="table table-dark display" id="myTable">
            <thead>
              <tr>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>
                <th scope="col">Category Image</th>
                <th scope="col">Edit Category </th>
                <th scope="col">Delete Category </th>
              </tr>
            </thead>
            <tbody>

              @foreach($res as $user)
                <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->cat_name}}</td>
                <td>{{ $user->cat_des}}</td>
                <td><img src="{{ asset('Admin/img/cat-images/' . $user->cat_img) }}" alt="" height="50px" width="100px"></td>
                <td><a href="{{ route('category.edit',$user->id) }}"  class="btn btn-warning">Edit</a></td>
                <td>
                <form action="{{route('category.destroy',$user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Are Your Sure?')">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
    
    
          </tbody>
</table>
            </div>
          </div>
        </div>

@endsection