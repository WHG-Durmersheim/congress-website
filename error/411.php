<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 411';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Length ben&ouml;tigt</h2>
<p>
  Ihre Anfrage kann ohne ein „Content-Length“-Header-Feld nicht bearbeitet werden.<br><br>
  Fehlercode: 411<br><br>
</p>
