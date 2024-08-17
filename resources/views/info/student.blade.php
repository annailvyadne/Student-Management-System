@extends('info.layout.app')

@section('content')

<a href="{{route('users.create')}}"><button class="btn btn-primary">Add Student</button></a>

<table class="table table" id="datatable">
  <thead>
    <th>ID</th>
    <th>User ID</th>
    <th>Email</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>Course Name</th>
    <th>Actions</th>
  </thead>

  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->user_id}}</td>
      <td>{{$student->user->email }}</td>
      <td>{{$student->fname}}</td>
      <td>{{$student->lname}}</td>
      <td>{{$student->gender}}</td>
      <td>{{$student->dob}}</td>
      <td>{{$student->address}}</td>
      <td>{{$student->pnum}}</td>
       @foreach ($student->courses as $course) 
         <td>{{$course->cname}}</td>
      @endforeach 
    
      <td>
        <a href="{{route('users.edit', ['user' => $student->id])}}">
        <button class="editBtn">Edit</button>
        </a>

        <form action="{{route('users.destroy', ['user' => $student->id])}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="deleteBtn">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
