<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Aufnahmen';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<link href="//vjs.zencdn.net/5.8/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/5.8/video.min.js"></script>
<style>

.video {
  width: calc(100vw - 32px);
  height: calc(56vw - 32px);
  background: #000;
}
@media only screen and (min-width: 720px) {
  .video {
    width: 688px;
    height: 387px;
  }
}
</style>
<h2>Livestream</h2>
<p>
  <video title="Livestream" id="player" class="video video-js vjs-default-skin" controls preload="none">
    <source src="http://116.203.221.72:8080/hls/stream.m3u8" type="application/x-mpegURL" />
  </video>
</p>
<p>
  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
</p>
