@extends('info.layout.app')

@section('content')

  <form action={{route('courses.store')}} method="POST">

    @csrf
    @method('POST')

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cname">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

