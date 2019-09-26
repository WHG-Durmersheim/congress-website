<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 501';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Nicht bereitgestellt</h2>
<p>
  Die Funktionalität, um die Anfrage zu bearbeiten, wird von diesem Server nicht bereitgestellt.<br><br>
  Fehlercode: 501<br><br>
</p>
