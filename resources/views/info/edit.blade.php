@extends('info.layout.app')

@section('content')

  <form action="{{ route('users.update', ['user' => $student->id]) }}" method="POST">

    @csrf
    @method('put')

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname" value="{{$student->fname}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lname" value="{{$student->lname}}">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Birthdate</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="dob" value="{{$student->dob}}">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="gender" value="{{$student->gender}}">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$student->address}}">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pnum" value="{{$student->pnum}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{$student->user->email}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection