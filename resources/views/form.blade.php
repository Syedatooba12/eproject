@extends('links')
@section('formcontent')
<div class="container">
<form method="post">
    @csrf
  <div class="mb-3">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NAME</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
  </div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PHONE NO</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="number">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <button class="btn btn-light"><a href="/list">LIST</a></button>
</form>
</div>

@endsection