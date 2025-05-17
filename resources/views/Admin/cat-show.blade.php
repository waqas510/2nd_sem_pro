@extends('Admin.layout')
@section('title', 'Admin | Create Category')

@section('adminContent')

<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">All Category</h1>
    <p class="lead">Show All Categories</p>
  </div>
</div>
<div class="container">
    <div class="row">
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

              @foreach ($res as $user)
                <tr>
                <th scope="row">{{ $user->cat_id}}</th>
                <td>{{ $user->cat_name}}</td>
                <td>{{ $user->cat_des}}</td>
                <td>{{ $user->cat_des}}</td>
                <td><input type="submit" value="Edit" class="btn btn-warning"> </td>
                <td><input type="submit" value="Delete" class="btn btn-danger"></td>
              </tr>
              @endforeach
    
    
          </tbody>
</table>
            </div>
          </div>
        </div>

@endsection