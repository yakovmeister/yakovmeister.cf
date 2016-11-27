@extends('temp.late')

@section('content')
<div class="row">
@forelse($suggestions as $suggestion)
 <div style="width: 60%; margin: 0 auto;">
 	<a href='{{ url("/suggestions/open/{$suggestion->id}") }}' class="fancy-font-1">{{ $suggestion->name }}</a>
 	@if(strlen($suggestion->message) >= 100) 
		<p class="fancy-font-3">{{ substr($suggestion->message ,0 ,100) }}...</p>
	@else
		<p class="fancy-font-3">{{ $suggestion->message }}</p>
	@endif
 </div>
@empty
<h3 class="fancy-font-1" align="center" style="width: 60%; margin: 0 auto;">No war plans ahead.</h3>
@endforelse

{{ $suggestions->links() }}
</div>
@stop