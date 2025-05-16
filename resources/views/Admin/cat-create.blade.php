@extends('Admin.layout')
@section('title', 'Admin | Create Category')

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
            <form method="POST">
                <div class="mb-3">
                  <label  class="form-label">Categor Name</label>
                  <input type="text" class="form-control" name="catName" required>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Category Description (optional)</label>
                  <input type="text" class="form-control" name="catDes">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Category Image/Icon (optional)</label>
                  <input type="text" class="form-control" name="catImg">
                </div>
                
                <button type="submit" class="btn btn-primary w-100" name="saveCat">Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection