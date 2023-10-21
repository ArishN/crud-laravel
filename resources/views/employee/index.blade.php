@extends('layouts.app')

@section('content')

<div class="home w-100 p-3">
<div class="top_bar row">
<div class="col-md-6">
    <button class="btn btn-primary">Add Employee</button>
</div>
<div class="col-md-6"></div>
</div>
<div class="data_table my-3">
<table class="table table-hover">
    <thead>
<tr>
    <th scope="col">No.</th>
    <th scope="col">First Name</th>
    <th scope="col">Last name</th>
    <th scope="col">E-mail</th>
    <th scope="col">Salary</th>
    <th scope="col">Date</th>
    <th scope="col">Actions</th>
</tr>
</thead>
<tbody>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    </tr>
</tbody>
</table>
</div>

</div>


@endsection