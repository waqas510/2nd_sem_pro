@extends('layout')
@section('title', 'Create')

@section('pageContent')
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <br><br><br>
            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categor Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <div class="col-6">
            <img src="img/about/about.png" alt="">
        </div>
    </div>
</div>

@endsection