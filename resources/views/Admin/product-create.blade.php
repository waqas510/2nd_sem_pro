@extends('Admin.layout')
@section('title', 'Admin | Create Category')

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
            <form method="POST" action="{{ url('savepro') }}" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label  class="form-label">Song Title</label>
                  <input type="text" class="form-control" name="proName" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Song Description(optional)</label>
                  <input type="text" class="form-control" name="proDes" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Song Image/Icon </label>
                  <input type="file" class="form-control" name="proImg" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection