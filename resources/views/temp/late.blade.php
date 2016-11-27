<!DOCTYPE html>
<html>
<head>
	<title>{{ $title ?? "Congratulations, you've killed link" }}</title>
	<meta name="Description" content="Yakovmeister's Homepage... Don't starve fan, and don't starve together Vault 547 and 548 Server Overseer.">
	<meta name="Keywords" content="Don't Starve Together, DST, yakovmeister, Jacob Baring, electro7bug">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link  href="{{ asset('/css/theme.css') }}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header" align="center">	
				<h1 class="fancy-font-1"><a href="{{ url('/') }}">{ Yakovmeister }</a></h1>
				<p class="fancy-font-3">{{ \App\Jackbox\Hashtags::i()->getAHeaderMessage() }}</p>
				<p class="fancy-font-3">Also Yes, Fancy I cannot.</p>
				<a href="https://www.facebook.com/yakovmeister" style="color:#3b5998;">
					<span class="fa fa-facebook-square"></span>
				</a> | 
				<a href="https://github.com/yakovmeister" style="color:#000000;">
					<span class="fa fa-github"></span>
				</a> | 
				<a href="https://paypal.me/yakovmeister/500" style="color:#1e477a;">
					<span class="fa fa-paypal"></span>
				</a>
			</div>
			@if(session('flash'))
            <div class="alert alert-{{ session('flash')['type'] }} alert-dismissible" role="alert" style="width: 60%; margin: auto;">
            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            	<span aria-hidden="true">&times;</span></button>
            	{{ session('flash')['message'] }}
            </div>
            <br />
          @endif
		</div>
		@yield('content')
		<footer class="footer">
			<h6 class="fancy-font-1" align="center" style="width:40%; margin: 0 auto;">&copy; 2016 <a href="{{ url('/') }}">Yakovmeister</a>. All rights reserved.</h6>
			<h6 class="fancy-font-1" align="center" style="width:40%; margin: 0 auto;">
				{{ \App\Jackbox\Hashtags::i()->getAHashtag() }}
			</h6>
		</footer>
	</div>
	<!-- Javascript -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.x-git.min.js"></script>
	<script src="{{ asset('/js/app.js') }}" rel="stylesheet"></script>
</body>
</html>