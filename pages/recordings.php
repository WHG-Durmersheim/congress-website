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
<style><?php include($_SERVER['DOCUMENT_ROOT']).'/css/video.min.css'; ?></style>
<h2>Aufnahmen</h2>
<p>
  <div class="video"></div>
</p>
<h2>Beschreibung</h2>
<p>
  Auf dieser Seite finden sie nach dem Kongress die Aufnahmen der Keynote und der Forumdiskussion.
</p>
