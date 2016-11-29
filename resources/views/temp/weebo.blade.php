@extends("temp.late")

@section("content")
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
	<h2 align="center" class="fancy-font-3">ShitsujiUI</h2>
	<p align="center" class="fancy-font-3">Same butler, but with the make up.</p>
</div>
<div class="col-md-3"></div>
</div><!-- row -->

<div class="row">
	
<div class="col-md-3"></div>
<div class="col-md-6">
	<form>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="How may I serve you master?">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">Go!</button>
		</span>
	</div><!-- /input-group -->
	</form>
</div>
<div class="col-md-3"></div>
</div><!-- row-->

<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="search-results" style="margin-bottom: 50px;"></div>
</div>
<div class="col-md-3"></div>
</div><!-- row-->
@stop

@push('javascript')
<script type="text/javascript">
</script>
@endpush