@extends('Admin.layout')
@section('title', 'Mixify  | Show All Messages')

@section('adminContent')
<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h3 class="display-4">Messages</h3>
  </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 table-responsive">
            <br><br>
            <table class="table table-dark display " id="myTable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">phone</th>
                <th scope="col">Message</th>
                <th scope="col">Delete Message </th>
              </tr>
            </thead>
            <tbody>

              @foreach($res as $user)
                <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phone}}</td>
                <td style="word-wrap: break-word; max-width: 200px;" >{{ $user->message}}</td>
                <td>
                <form action="{{route('contact.destroy',$user->id)}}" method="post">
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