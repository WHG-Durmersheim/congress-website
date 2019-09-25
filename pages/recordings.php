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
<h2>Aufnahmen</h2>
<p>
  <iframe title="Livestream" class="video" src="https://www.youtube.com/embed/5_CpeZEiIFQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
