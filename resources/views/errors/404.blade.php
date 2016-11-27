@extends('temp.late')

@section('content')
	<h3 class="fancy-font-1" align="center" style="width:40%; margin: 0 auto;">Hyrule can no longer be saved.</h3>
	<p align="center" class="fancy-font-1" style="width:40%; margin: auto;"><a href="{{ url()->previous() }}">Click me to save link</a></p>
@stop