<link rel="stylesheet" href="../assets/musicas/css/style.css">
    <script src="http://freeshared.org/js/jquery.js"></script>
	<script src="http://freeshared.org/js/bootstrap.js"></script>
	<script src="http://freeshared.org/js/bootstrap.min.js"></script>
	<script src="http://freeshared.org/js/npm.js"></script>
<article>
    <br>
	<div class="col-md-12">
		<audio id="audio" preload="auto"></audio>
		<div class="btn-group">
			<button onclick="Play('music.mp3','audio');" class="btn btn-custom"><span title="Play" id="play" class="glyphicon glyphicon-play aligned"></span></button>
			<button onclick="Stop('music.mp3','audio');" class="btn btn-custom"><span title="Stop" id="stop" class="glyphicon glyphicon-stop aligned"></span></button>
			<button onclick="Restart('music.mp3','audio');" class="btn btn-custom"><span title="Restart" id="restart" class="glyphicon glyphicon-step-backward aligned"></span></button>
			<button onclick="Backward5('music.mp3','audio');" class="btn btn-custom"><span title="-5 seconds" id="play" class="glyphicon glyphicon-fast-backward aligned"></span></button>
			<button onclick="Forward5('music.mp3','audio');" class="btn btn-custom"><span title="+5 seconds" id="play" class="glyphicon glyphicon-fast-forward aligned"></span></button>
			<button onclick="Backward1('music.mp3','audio');" class="btn btn-custom"><span title="-1 second" id="play" class="glyphicon glyphicon-chevron-left aligned"></span></button>
			<button onclick="Forward1('music.mp3','audio');" class="btn btn-custom"><span title="+1 second" id="play" class="glyphicon glyphicon-chevron-right aligned"></span></button>
			<button onclick="VolumeUp('music.mp3','audio');" class="btn btn-custom"><span title="Volume Up" id="volumeup" class="glyphicon glyphicon-plus aligned"></span></button>
			<button onclick="VolumeDown('music.mp3','audio');" class="btn btn-custom"><span title="Volume Down" id="volumedown" class="glyphicon glyphicon-minus aligned"></span></button>
		</div>
	</div>
</article>