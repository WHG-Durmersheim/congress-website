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
<style><?php include($_SERVER['DOCUMENT_ROOT']).'/css/video.min.css'; ?></style>
<h2>Livestream</h2>
<p>
  <iframe title="Livestream" class="video" src="https://www.youtube.com/embed/tOka_pCUXAs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
<h2>Beschreibung</h2>
<p>
  Auf dieser Seite finden sie am Tag des Kongresses den Livestream der Keynote und der Forumdiskussion.
</p>
