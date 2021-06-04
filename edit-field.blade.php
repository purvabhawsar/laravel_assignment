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
<h2 class="m-5 p-3 bg-dark text-light">Crud Application update Student</h2>
@if(Session::has('showupdate'))
<span>{{Session::get('showupdate')}}</span>
@endif

<form method="post" action="{{route('update-field')}}">
@csrf
<input type="hidden" name="id" value="{{$elist->id}}">

	<div class="form-group">
		<input type="text" class="form-control p-3"value="{{$elist->studname}}" name="name">
		<h6 class="text-left text-danger p-3"></h6>
		
	</div>
	<div class="form-group">
		<input type="text"  class="form-control p-3" value="{{$elist->course}}" name="course">
		<h6 class="text-left text-danger p-3"></h6>
	</div>
	<div class="form-group"><center><button class="btn btn-primary btn-center">Update</button></center></div>
</div>
</form>

	


</div>
	
</body>
</html>