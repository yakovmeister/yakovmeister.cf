@extends('temp.late')

@section('content')
		<div class="row">
			<h2 class="fancy-font-1" align="center" style="width: 60%; margin: 0 auto;"> Hi! I'm Jacob, Don't Starve fan, a nub Dota2 gamer, and a mediocre coder, and probably a below average guy who excels at none.</h2>
			<br />
			<h3 class="fancy-font-1" align="center" style="width: 80%; margin: 0 auto;">No! This is not a mthrfckng website for advertising myself. Need not. I just want you to see that I have a gddmn website. <span class="black">* insert sarcasm*</span> </h3>
			<br />
			<p class="fancy-font-1" align="center" style="width: 75%; margin: 0 auto;">Although mediocre, I find myself creating some absolutely useless stupid apps just to fill in my free time. Behold <a href="https://github.com/yakovmeister/shitsuji">Shitsuji</a> a Command Line Interface Based Anime Downloader, made with PHP and hate <span class="black">* manifest love, I cannot *</span> </p>
			<br />
			<p class="fancy-font-1" align="center" style="width: 60%; margin: 0 auto;">If it's not stupid enough, I've also made some mthrfckng sql connection wrapper named <a href="#">Konek</a>, which of course only supports MySQL and SQLite at this point. Also only supports basic sql features which is perfect for newbs. <span class="black">* insert sarcastic cackle *</span> and oh! it's made with PHP and hate too.</p>
			<br />
			<h3 class="fancy-font-1" align="center" style="width:55%; margin: 0 auto;">No graphic and artsy, too lazy to make it fancy <span class="black">* OMG!!! poetic rhyme *</span> Anyway, who cares? No one will visit and read this <span class="black">* smpl yet owezum *</span> page for sure. No one cares too. So. . .</h3>
			<br />
			<p align="center">
				<a href="{{ url('/contact-me') }}" class="btn btn-primary fancy-font-1">Hangout with me?</a>
				<button class="btn btn-success fancy-font-1" data-toggle="modal" data-target="#suggestionBox">Have something to say?</button>
				<a href="https://steamcommunity.com/id/yakovmeister/tradeoffers/" class="btn btn-primary fancy-font-1">Wat? Steam Trade?</a>
			</p>
			<br />
			<h4 class="fancy-font-1" align="center" style="width:40%; margin: 0 auto;">Hate me? Cool let's make money out of that hatred by donating <a href="https://paypal.me/yakovmeister/">here</a>.</h4>
			<br />
			<h5 class="fancy-font-1" align="center" style="width:40%; margin: 0 auto;">Lastly, check the mediocrity of my works <a href="https://github.com/yakovmeister">here</a>.</h5>
			<br />
		</div>

		<!-- Modal -->
		<div class="modal fade" id="suggestionBox" tabindex="-1" role="dialog" aria-labelledby="suggestionBoxLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="suggestionBoxLabel">Suggestion and Comment Box</h4>
					</div>
					<div class="modal-body">
						<form action="{{ url('suggest') }}" method="POST">
						{{ csrf_field() }}
						<label for="name">Full Name</label>
						<input type="text" id="name" name="name" class="form-control" value="{{$old ?? ''}}" placeholder="Douche Cocksucker" required>
						<label for="email">Email</label>
						<input type="text" id="email" name="email" class="form-control" value="{{$old ?? ''}}" placeholder="pinkpu55y@eatingita.live" required>
						<label for="message">Your Message:</label>
						<textarea id="message" class="form-control" name="message" required></textarea>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
		  </div>
		</div>
@stop