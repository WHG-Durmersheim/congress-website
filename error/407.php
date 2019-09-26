<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 407';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Proxy Authentifizierung benötigt</h2>
<p>
  Authentifizierung des Clients gegenüber dem verwendeten Proxy erforderlich.<br><br>
  Fehlercode: 407<br><br>
</p>
