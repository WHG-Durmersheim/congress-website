<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 403';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Zugriff abgelehnt</h2>
<p>
  Sie sind nicht berechtigt, auf diese Datei zuzugreifen.<br>
  Bitte überprüfen sie die Schreibweise der Adresse.<br><br>
  Fehlercode: 403<br><br>
</p>
