<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Edit Data Post - SantriKoding.com</title>
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
<div class="container mt-5 mb-5">
 <div class="row">
 <div class="col-md-12">
 <div class="card border-0 shadow rounded">
 <div class="card-body">
 <form action="{{ route('student.update', $student->id) }}" method="POST"
enctype="multipart/form-data">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label class="font-weight-bold">name</label>
 <input type="text" class="form-control" name="name" value="{{
old('name', $student->name) }}">
 </div>

 <div class="form-group">
 <label class="font-weight-bold">address</label>
 <input name="address" type="text" class="form-control" placeholder="address" value="{{ old('address', $student->address) }}">


 </div>

 <div class="form-group">
 <label class="font-weight-bold">DateOfBirth</label>
 <input name="DateOfBirth" type="text" class="form-control" placeholder="DateOfBirth" value="{{ old('DateOfBirth', $student->DateOfBirth) }}">


 </div>

 <div class="form-group">
 <label class="font-weight-bold">Telephone</label>
 <input name="Telephone" type="text" class="form-control" placeholder="Telephone" value="{{ old('Telephone', $student->Telephone) }}">


 </div>

 <div class="form-group">
 <label class="font-weight-bold">Schooll</label>
 <input name="Schooll" type="text" class="form-control" placeholder="Schooll" value="{{ old('Schooll', $student->Schooll) }}">


 </div>

 <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
 <button type="reset" class="btn btn-md btn-warning">RESET</button>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>