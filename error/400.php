<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 400';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Falsche Anfrage</h2>
<p>
  Ihre Anfrage-Nachricht ist fehlerhaft aufgebaut.<br><br>
  Fehlercode: 400<br><br>
</p>
