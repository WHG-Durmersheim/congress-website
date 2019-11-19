<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Livestream';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<link href="//vjs.zencdn.net/5.8/video-js.min.css" rel="stylesheet">
<script src="//vjs.zencdn.net/5.8/video.min.js"></script>
<style><?php include($_SERVER['DOCUMENT_ROOT']).'/css/video.min.css'; ?></style>
<h2>Livestream</h2>
<p>
  <video title="Livestream" id="player">
    <iframe src="https://www.youtube.com/embed/tOka_pCUXAs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </video>
</p>
<h2>Beschreibung</h2>
<p>
  Auf dieser Seite finden sie am Tag des Kongresses den Livestream der Keynote und der Forumdiskussion.
</p>
