<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 401';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Zugriff abgelehnt</h2>
<p>
  Ihre Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden.<br><br>
  Fehlercode: 401<br><br>
</p>
