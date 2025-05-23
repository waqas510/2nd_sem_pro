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
                <th scope="col">Song ID</th>
                <th scope="col">Song Name</th>
                <th scope="col">Song Description</th>
                <th scope="col">Song Category</th>
                <th scope="col">Song</th>
                <th scope="col">Edit Song </th>
                <th scope="col">Delete Song </th>
              </tr>
            </thead>
            <tbody>

              @foreach($res as $user)
                <tr>
                <th scope="row">{{ $user->pro_id}}</th>
                <td>{{ $user->pro_name}}</td>
                <td>{{ $user->pro_des}}</td>
                <td>{{ $user->catId}}</td>
                <td><audio src="{{ asset('Admin/Music/' . $user->pro_audios) }}" alt="" controls></audio></td>
                <td><a href="{{ route('product.edit',$user->pro_id) }}"  class="btn btn-warning">Edit</a></td>
                <td><a href="#"  class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
    
    
          </tbody>
</table>
            </div>
          </div>
        </div>

@endsection