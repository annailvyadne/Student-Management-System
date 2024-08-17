@extends('info.layout.app')

@section('content')

  <form action={{route('users.store')}} method="POST">

    @csrf
    @method('POST')

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lname">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Birthdate</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="dob">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="gender">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pnum">
  </div>

      <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Courses</label>
    <select name="course" id="course">
      <option value="" selected disabled>Select a course</option>
      @foreach($courses as $course)

      <option value="{{$course->id}}">{{$course->cname}}</option>
          
      @endforeach
    </select>
    
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>

