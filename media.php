<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<button id="1" onclick="asdf()">123</button>
<audio  controls  id="audio_1">
  <source src="Floating flow - Foxtail Grass.ogg" type="audio/ogg">
  <source src="Floating flow - Foxtail Grass.mp3" type="audio/mp3">
Your browser does not support the audio element.
</audio>
<video id="audio_2" width="50%" height="50%" controls >
  <source src="1.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
<button onclick="getVolume()" type="button">What is the volume?</button>
<button onclick="setHalfVolume()" type="button">Set volume to 0.2</button>
<button onclick="setFullVolume()" type="button">Set volume to 1.0</button>
<audio id="audio_3" controls >
    <source src="html5-audio-loop.ogg">
    <source src="html5-audio-loop.wav">
    <source src="html5-audio-loop.mp3">
</audio>
<audio id="audio_4" controls >
    <source src="html5-audio-loop.ogg">
    <source src="html5-audio-loop.wav">
    <source src="html5-audio-loop.mp3">
</audio>
<p>Can my browser play OGG videos? <span>
<button onclick="supportType(event,'video/ogg','theora, vorbis')" type="button">Test</button>
</span></p>
<script>
function supportType(e,vidType,codType) { 
    var vid = document.createElement('video');
    isSupp = vid.canPlayType(vidType+';codecs="'+codType+'"');
    if (isSupp == "") {
        isSupp = "No";
    }
    e.target.parentNode.innerHTML = "Answer: " + isSupp;
} 
function asdf()
{
	var a = document.getElementById('audio_3');
	var b = document.getElementById('audio_4');
	if(a.paused)
	{
		a.play();
		b.play();
	}
	else
	{
		a.pause();
		b.pause();
	}
}
document.getElementById('audio_3').addEventListener('ended', function(){
    this.currentTime = 0;
    this.pause();
    document.getElementById('audio_4').play();
}, false);
 
document.getElementById('audio_4').addEventListener('ended', function(){
    this.currentTime = 0;
    this.pause();
    document.getElementById('audio_2').play();
}, false);
document.getElementById('audio_2').addEventListener('ended', function(){
    this.currentTime = 0;
    this.pause();
    document.getElementById('audio_3').play();
}, false);
var vid = document.getElementById("myVideo");

function getVolume() { 
    alert(vid.volume);
} 
  
function setHalfVolume() { 
    vid.volume = 0.2;
} 
  
function setFullVolume() { 
    vid.volume = 1.0;
} 
setTimeout("self.close()",(t * 1000));
</script> 
<p>new blank page <a href="https://www.google.com/" target="_blank">Google</a>.</p><br />
<p>in page <a href="https://www.google.com/">Google</a>.</p>
</body>
</html>