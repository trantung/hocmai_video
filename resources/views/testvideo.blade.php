<!-- <video autoplay="autoplay" controls="controls" width="300" height="150"> 
    <source src="{{$url}}" />
</video> -->


<br/>



<!-- <video width="352" height="198" controls>
	<source src="https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8" type="application/x-mpegURL"/>

</video> -->
<link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">

<!-- HTML -->
<video id='hls-example' autoplay class="video-js vjs-default-skin" width="400" height="300" controls>
<source type="application/x-mpegURL" src="{{$url}}">
</video>


<!-- JS code -->
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
<script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

<script>
var player = videojs('hls-example');
player.play();
</script>