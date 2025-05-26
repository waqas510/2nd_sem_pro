@extends('Admin.layout')
@section('title', 'Mixify  | Show All Music')

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
    <h1 class="display-4">All SONGS</h1>
    <p class="lead">Show All SONGS</p>
  </div>
</div>
<div class="container">
    <div class="row">
              <div><a href="{{ url('products/create') }}" class="btn btn-primary float-end">Add Song</a></div>
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
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->song_name}}</td>
                <td>{{ $user->song_des}}</td>
                <td>{{ $user->catid}}</td>
                <td><audio src="{{asset('Admin/Music/' . $user->song)}}" alt="" controls></audio></td>
                <td><a href="{{route('products.edit',$user->id)}}"  class="btn btn-warning">Edit</a></td>
                <td>
                <form action="{{route('products.destroy',$user->id)}}" method="post">
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