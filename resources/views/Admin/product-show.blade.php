@extends('Admin.layout')
@section('title', 'Mixify  | Show All Music')

@section('adminContent')

<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">All Products</h1>
    <p class="lead">Show All Products</p>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br>
            <table class="table table-dark display" id="myTable">
            <thead>
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Category</th>
                <th scope="col">Product Image</th>
                <th scope="col">Edit Product </th>
                <th scope="col">Delete Product </th>
              </tr>
            </thead>
            <tbody>

              @foreach($res as $user)
                <tr>
                <th scope="row">{{ $user->pro_id}}</th>
                <td>{{ $user->pro_name}}</td>
                <td>{{ $user->pro_des}}</td>
                <td>{{ $user->cat_name}}</td>
                <td><img src="{{ asset('Admin/Music/' . $user->pro_audios) }}" alt="" height="50px" width="100px"></td>
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