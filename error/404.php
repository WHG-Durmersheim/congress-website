<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 404';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Datei nicht gefunden</h2>
<p>
  Die ausgewählte Datei wurde nicht gefunden.<br>
  Bitte überprüfen sie die Schreibweise der Adresse.<br><br>
  Fehlercode: 404<br><br>
</p>
