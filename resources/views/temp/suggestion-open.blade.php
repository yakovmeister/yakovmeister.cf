@extends('temp.late')

@section('content')
<div class="row">
 <div style="width: 60%; margin: 0 auto;">
 	<h3 class="page-header fancy-font-3" title="{{ $suggestion->email }}">Message by: {{ $suggestion->name }} at <small>{{ $suggestion->updated_at->diffForHumans() }}</small></h3>
 	<p class="fancy-font-1">{{ $suggestion->message }}</p>
 </div>
</div>
@stop