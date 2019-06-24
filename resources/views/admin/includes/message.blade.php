@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			<center><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></center>
			<center>{{$error}}</center>
		</div>
	@endforeach
@endif

@if(session('success'))
		<div class="alert alert-success">
			<center><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{session('success')}}</center>
		</div>
@endif