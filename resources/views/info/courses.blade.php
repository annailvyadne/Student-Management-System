@extends('info.layout.app')

@section('content')

<a href="{{route('courses.create')}}"><button class="btn btn-primary">Add Courses</button></a>

<table class="table table" id="datatable">
  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Actions</th>
  </thead>

  <tbody>
    @foreach ($courses as $course)
    <tr>
      <td>{{$course->id}}</td>
      <td>{{$course->cname}}</td>
      <td>{{$course->desc}}</td>
      <td>
        <a href="{{route('courses.edit', ['course' => $course->id])}}">
        <button class="editBtn">Edit</button>
        </a>

        <form action="{{route('courses.destroy', ['course' => $course->id])}}" method="POST">
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
