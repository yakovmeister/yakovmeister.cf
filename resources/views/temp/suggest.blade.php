@extends('temp.late')

@section('content')
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		@if($errors->all()) 
		    @foreach($errors->all() as $error)
		        <p class="alert alert-danger"> {{ $error }} </p>
		    @endforeach
		@endif
		<form action="{{ url('suggest') }}" method="POST">
			{{ csrf_field() }}
			<label for="name">Full Name</label>
			<input type="text" id="name" name="name" class="form-control" value="{{$name ?? ''}}" placeholder="Douche Cocksucker" required>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" class="form-control" value="{{$email ?? ''}}" placeholder="pinkpu55y@eatingita.live" required>
			<label for="message">Your Message:</label>
			<textarea id="message" class="form-control" name="message" required>{{$message ?? ''}}</textarea>
			<button type="submit" class="btn btn-primary btn-block margin-top-gamay">Submit</button>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
@stop