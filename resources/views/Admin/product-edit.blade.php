@extends('Admin.layout')
@section('title', 'Mixify  | Add New Songs')

@section('adminContent')

<div class="jumbotron jumbotron-fluid text-center text-dark mt-4">
  <div class="container">
    <h1 class="display-4">Update Songs</h1>
    <p class="lead">Please Fill Out All Information</p>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br><br>
            <form method="POST" action="{{ route('product.edit') }}" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Update Song Title</label>
                  <input type="text" class="form-control" name="pro_name" required>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Update Song Description</label>
                  <input type="text" class="form-control" name="pro_des" required>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Update Song Category</label><br>
                  <select name="catId" class="form-label" style="height: 40px; width: 250px; border-radius: 8px;" required>
                    <option value="">Select Category</option>
                    @foreach ($res as $user)
                    <option value="{{ $user->cat_id}}">{{ $user->cat_name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px;">Update Song</label>
                  <input type="file" accept="audio/*" class="form-control" name="pro_audios" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection