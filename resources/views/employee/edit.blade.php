@extends('layouts.app')

@section('content')



<div class="create_form_page w-100 p-5 d-flex align-items-center justify-content-center">
    <div class="form_container col-md-6" >
<div class="title"><h1>Edit User</h1></div>
<div class="create_form w-100 p-3">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form class="form" action="{{ route('update') }}" method="post">
    @csrf
<div class="form-fields">
    <div class="mb-3">
        <input type="hidden" name="existing_id" value="{{ $existingemployeedata['id'] }}">
        <label for="first name" class="form-label">First Name</label>
        <input type="text" name="firstname" value="{{ $existingemployeedata['firstname'] }}" class="form-control" id="firstname" placeholder="First Name...">
      </div>
    <div class="mb-3">
        <label for="last name" class="form-label">Last Name</label>
        <input type="text" name="lastname" value="{{ $existingemployeedata['lastname'] }}" class="form-control" id="lastname" placeholder="Last Name...">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">E Mail</label>
        <input type="email" name="email" value="{{ $existingemployeedata['email'] }}" class="form-control" id="email" placeholder="Email...">
      </div>
    <div class="mb-3 row">
        <div class="col-md-6">
        <label for="salary" class="form-label">Salary</label>
        <input type="text" name="salary" value="{{ $existingemployeedata['salary'] }}" class="form-control" id="salary" placeholder="Salary...">
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">Joining Date</label>
            <input type="date" name="date" value="{{ $existingemployeedata['date'] }}" class="form-control" id="joiningdate" placeholder="Joining Date...">
        
        </div>
        
      </div>
      <div class="my-3 row">
        
        <button class="btn btn-success w-50 mx-auto">Submit</button>
      </div>
</div>
    </form>
</div>
</div>
</div>

@endsection