@extends('layouts.app')

@section('content')

<div class="create_form_page w-100 p-5 d-flex align-items-center justify-content-center">
    <div class="form_container col-md-6" style="background: ">
<div class="title"><h1>Add User</h1></div>
<div class="create_form w-100 p-3">
    <form class="form" action="{{ route('store') }}" method="post">
    @csrf
<div class="form-fields">
    <div class="mb-3">
        <label for="first name" class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name...">
      </div>
    <div class="mb-3">
        <label for="last name" class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name...">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">E Mail</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email...">
      </div>
    <div class="mb-3 row">
        <div class="col-md-6">
        <label for="salary" class="form-label">Salary</label>
        <input type="text" name="salary" class="form-control" id="salary" placeholder="Salary...">
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">Joining Date</label>
            <input type="date" name="date" class="form-control" id="joiningdate" placeholder="Joining Date...">
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