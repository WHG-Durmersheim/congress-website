<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 503';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Server nicht erreichbar</h2>
<p>
  Der Server steht temporär nicht zur Verfügung,<br>wegen Überlastung oder Wartungsarbeiten.<br><br>
  Fehlercode: 503<br><br>
</p>
