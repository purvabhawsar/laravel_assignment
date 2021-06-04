<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
	.container{
		min-height: 600px;
		width: 800px;
		text-align: center;
	}
	
</style>
</head>
<body>
<div class="container">
<h2 class="m-3 p-3 bg-dark text-light">Crud Application view student List</h2>
<a href="{{route("crud-page")}}" role="button" class="btn btn-success m-5">Add Student Name</a>


	<div class="form-group">
	<table class="table table-striped text-center">
	<tr>
		<th>ID</th>
		<th>Student Name</th>
		<th>course</th>
		<th>Edit</th>
		<th>Delete</th>

	</tr>
	@foreach($posts as $post)
	<tr>
	<td>{{$post->id}}</td>
	<td>{{$post->studname}}</td>
	<td>{{$post->course}}</td>
	<td><a href="/edit-field/{{$post->id}}" role="button" class="btn btn-info">Edit</a></td>
	<td><a href="/delete-field/{{$post->id}}" role="button" class="btn btn-danger">Delete</a></td>
		
	</tr>
	@endforeach
	</table>
		</div>
	
</div>
	
</body>
</html>