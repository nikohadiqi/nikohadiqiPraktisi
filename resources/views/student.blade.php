<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Student Data</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Student Data </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('student.create') }}"> Add Data</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Date Of Birth</th>
<th>Telephone</th>
<th>Schooll</th>
<th width="280px">Action</th>
</tr>
@foreach ($student as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->name }}</td>
<td>{{ $p->address }}</td>
<td>{{ $p->DateOfBirth }}</td>
<td>{{ $p->Telephone }}</td>
<td>{{ $p->Schooll }}</td>
<td>
<form action="{{ route('student.destroy',$p->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('student.edit',$p->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>