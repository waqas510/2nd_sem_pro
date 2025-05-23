@extends('Admin.layout')
@section('title', 'Mixify  | Create Category')

@section('adminContent')

<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">Create Category</h1>
    <p class="lead">Please Fill Out All Information</p>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br><br>
            <form method="POST" action="{{ url('saveCat') }}" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label  class="form-label">Categor Name</label>
                  <input type="text" class="form-control" name="catName" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Category Description</label>
                  <input type="text" class="form-control" name="catDes" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Category Image/Icon</label>
                  <input type="file" class="form-control" name="catImg" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection