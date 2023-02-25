@extends('students.studentmaster')
@section('title', 'Add new students')
@section('page-content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Add new Student</h4>
            @if(session('status'))
            @endif
            <h4 class="aler alert-primary">{{session('status')}}</h4>
        </div>
        <div class="card-body">
            <form action="{{url('/addstudent')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" >
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department">
            </div>
            <div class="mb-3">
                <label for="Gender" class="form-label">Gender</label><br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="male">Female
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">photo</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
</div>
@endsection