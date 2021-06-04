<html>
<head>
<title>Add Student Detail</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<style type="text/css">
	.container{
		height: 500px;
		width: 600px;
		text-align: center;
	}
</style>
</head>
<body>
<div class="container">
<h2 class="m-5 p-3 bg-dark text-light">Crud Appli Student Detail</h2>
@if(Session::has('show'))
<span>{{Session::get('show')}}</span>
@endif
<form method="post" action="{{route('save-crud')}}">
@csrf

         

	<div class="form-group">
	 <input type="text" name="name" id="name" placeholder="student Name" class="form-control">

		        
		   
		<h6 class="text-left text-danger p-3"></h6>
		</div>
	
	<div class="form-group">
		<input type="text"  class="form-control p-3" placeholder="Enter your Course" name="course">
		<h6 class="text-left text-danger p-3"></h6>
	</div>
		<div class="form-group"><center><button class="btn btn-primary btn-center m-3">Submit</button></center></div>
		
</div>
</form>
	
</body>
</html>