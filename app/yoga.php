<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Solmaz Mohadjer | Yoga in Tübingen</title>
		<meta name="description" content="Solmaz Mohadjer | Yoga in Tübingen">
		<meta name="keywords" content="Solmaz Mohadjer, Yoga, Tübingen, Yoga Course, Yoga Class" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="resources/css/yoga.min.css">
	</head>
	<body class="home">
		<header class="clearfix">
			<a class="logo-icon" href="index.php"><img width="60" src="content/assets/logo.svg" alt="Home" /></a>
			<div class="logo">
				<p class="title">Open Yoga</p>
				<p class="tagline">No registration. No fees.</p>
			</div>
		</header>
		<div class="main home clearfix" role="main">
			<h1 style="text-align: center">Yoga with us from home.</h1>
Live online classes every Mon/Thu/Sun (18:00 CET): <a href="mailto:solmaz.mohadjer@gmail.com"><b>Email us for class link.</b></a>
<br /> 
To make a donation, <a href="mailto:solmaz.mohadjer@gmail.com"><b>contact us for more information.</b></a>
<hr>
<!--
	<p> Remember to keep a social distance of at least 1 meter and wash hands before attempting partner chair pose!</p>
<img src="content/images/image.png" alt="" />
-->
<div class="ytplayer" data-playlist-id="PLUrEnv0R3YHFy0qlClAXvY8bAl6fcIe0U">
	<div class="left">
		<div class="ytplayer-wrapper">
			<div class="ytplayer-video"></div>
		</div>
		<ul class="ytplayer-list"></ul>
	</div>
	<div class="right">
		<h2 class="ytplayer-title"></h2>
		<p class="ytplayer-description"></p>
	</div>
</div>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="https://apis.google.com/js/api.js"></script>
<hr>
<div class="">
	<h2>Listen to our audio classes</h2>
	<ul>
	    <li><a href="https://www.dropbox.com/s/55tzjd7b35vso28/Meditation%20on%20Emotions.m4a?dl=0">Meditation on Emotions</a></li>
	    <li><a href="https://www.dropbox.com/s/xeqcozw99iredlf/schoenbuch_yin.m4a?dl=0">Yin in Schoenbuch</a></li>
		<li><a href="https://www.dropbox.com/s/6vjaza32uo01ksv/yoga_for_back.m4a?dl=">Yoga for Back Pain</a></li>
		<li><a href="https://www.dropbox.com/s/fm0fu8cwlz9px6r/standing_yoga.m4a?dl=0">Mindful Standing Yoga</a></li>
	    <li><a href="https://www.dropbox.com/s/o02d6gewvoc7b1d/feeling_brave_kids.m4a?dl=0">Feeling Brave - For Kids</a></li>
        <li><a href="https://www.dropbox.com/s/68ypg5wg5mu5m4n/Meditation%20on%20thoughts.m4a?dl=0">Meditation on Thoughts</a></li>
	    <li><a href="https://www.dropbox.com/s/w1hgul6vin4r4uz/Yoga%20Nidra%20for%20rest%2C%20healing%2C%20vitality.m4a?dl=0">Yoga Nidra</a></li>
	    <li><a href="https://www.dropbox.com/s/uobhl0gzuanmq4f/feathered_peacock-sequence.mp3?dl=0">Towards Feathered Peacock (recorded in 2013)</a></li>
	</ul>
</div>

<script>
	let youTubeIframeAPIIsReady = (typeof YT.Player === 'undefined') ? false : true;
	let youtubePlaylistApiIsReady = false;

	gapi.load('client', function() {
		gapi.client.init({
			apiKey: 'AIzaSyB8BLH_MnwPpOtOnyGcDWw0FM-TRie8j_g',
			discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest']
		}).then(function() {
			youtubePlaylistApiIsReady = true;

			if (youTubeIframeAPIIsReady && youtubePlaylistApiIsReady) {
				initYTPlayer();
			}
		});
	});

	function onYouTubeIframeAPIReady() {
		youTubeIframeAPIIsReady = true;
		if (youTubeIframeAPIIsReady && youtubePlaylistApiIsReady) {
			initYTPlayer();
		}
	}

	function initYTPlayer() {
		function replaceURLWithHTMLLinks(text) {
			var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i;
			return text.replace(exp,"<a href='$1'>See lesson plan</a>");
		}

		function callback(elm) {
			let descriptionElm = elm.querySelector('.ytplayer-description');
			if (descriptionElm) {
				let desText = descriptionElm.innerHTML;
				desText = replaceURLWithHTMLLinks(desText);
				descriptionElm.innerHTML = desText;
			}
		}

		document.querySelectorAll('.ytplayer').forEach(function(elm) {
			const ytplayer = new YTPlayer({
				element: elm,
				cb_init: function() {
					callback(elm);
				},
				cb_playlist_click: function(item) {
					callback(elm);
				}
			});
		});
	}
</script>

		</div>

				<footer class="clearfix">
			<p>For questions, contact <a href="mailto:solmaz.mohadjer@gmail.com">Solmaz</a></p>
			<aside>
				<p><a href="https://twitter.com/yoga_tue">Follow us on Twitter</a></p>
			</aside>
		</footer>
		<script src="resources/js/yoga.min.js"></script>
		<script>
			var listElement = document.querySelector('div.home ul.list');
			if (listElement) {
				var filter = new FilterList({
					element: listElement,
					urlIsUpdatable: true
				});
			}
		</script>
	</body>
</html>