@extends('layouts.app')

@section('content')

<div class="home p-md-5 p-3 mx-auto">
<div class="top_bar row">
    <div class="col-md-6"></div>
<div class="col-md-6">
    <a href="/create">
    <button class="btn btn-primary float-end">Add Employee</button>
</a>
</div>

</div>
@if(session('success'))
    <h6 class="alert my-2 w-75 mx-auto alert-success">
        {{ session('success') }}
    </h6>
@endif
@if(session('warning'))
    <h6 class="alert my-2 w-75 mx-auto alert-warning">
        {{ session('warning') }}
    </h6>
@endif
<div class="data_table my-3">
    <div class="head">
        <h1><u>Employee Details:</u></h1>
    </div>
<table class="table table-hover">
    <thead>
<tr>
    <th scope="col">No.</th>
    <th scope="col">First Name</th>
    <th scope="col">Last name</th>
    <th scope="col">E-mail</th>
    <th scope="col">Salary</th>
    <th scope="col">Joining Date</th>
    <th scope="col">Actions</th>
</tr>
</thead>
<tbody>
    @if($employeedata != null && $employeedata != '' && isset($employeedata) )
    @foreach ($employeedata as $index => $data)
        
    <tr class="align-middle" id={{$index }}>
    <td>{{ $index +1 }}</td>
    <td>{{ $data['firstname'] }}</td>
    <td>{{ $data['lastname'] }}</td>
    <td>{{ $data['email'] }}</td>
    <td>{{ $data['salary'] }}</td>
    <td>{{ $data['date'] !=null ? $data['date'] : '-' }}</td>
    <td>
        <a class="text-decoration-none my-1 mx-2" href="/edit/{{ $data['id'] }}">
        <button class="btn btn-primary">Edit</button>
    </a>

        <button class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
   
        <div class="modal-body">
            <div class="d-flex w-100 justify-content-center">
            <img src="{{ asset('img/warning.png') }}" class="w-25 " alt="" srcset="">
        </div>
            <h1 class="fw-bold text-center">Warning</h1>
          <h3 class="text-center font-weight-bold">Are You Sure Do You Want to Delete This Data ?</h3>
        </div>
        <div class="modal-footer d-flex justify-content-center w-100">
            <div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
            <button type="button" class="btn btn-danger">Delete</button>
        </a>
        
        <form id="delete-form" onsubmit="event.preventDefault();" action="{{ route('destroy',$data['id']) }}" method="POST" style="display: none;">
           
            @method('delete')
             @csrf
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
    </td>
    </tr>
    @endforeach
@endif
</tbody>
</table>
</div>

</div>


  <div style="position: fixed;bottom:10px;right:10px;">
    <a href="/logout" class="btn btn-danger p-1" style="text-decoration:none;">
        logout
    </a>
  </div>



@endsection