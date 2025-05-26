@extends('Admin.layout')
@section('title', 'Mixify  | Add New Songs')

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
    <h1 class="display-4">Update Songs</h1>
    <p class="lead">Please Fill Out All Information</p>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br><br> 
            <form method="POST" action="{{ route('products.update',$product)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Update Song Title</label>
                  <input type="text" value="{{ $product->song_name }}" class="form-control" name="song_name" required>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Update Song Description</label>
                  <input type="text" value="{{ $product->song_des }}" class="form-control" name="song_des" required>
                </div>

                <div class="mb-3">
                  <label  class="form-label" style="font-size: 20px">Update Song Category</label><br>
                  <select name="catid" class="form-label" style="height: 40px; width: 250px; border-radius: 8px;" required>
                    <option value="">Select Category</option>
                    @foreach ($cat as $user)
                    <option value="{{ $user->id}}">{{ $user->cat_name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3"> 
                  <label  class="form-label" style="font-size: 20px;">Old Song</label><br>
                  <audio src="{{ asset('Admin/Music/' . $product->song) }}" alt="" controls></audio>
                </div>
                <div class="mb-3"> 
                  <label  class="form-label" style="font-size: 20px;">Update Song</label>
                  <input type="file" accept="audio/*" class="form-control" name="song" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
        </form>
            </div>
          </div>
        </div>

@endsection