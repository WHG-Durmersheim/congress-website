<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Status 300';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Mehrere M&ouml;glichkeiten</h2>
<p>
  Die Datei steht in verschiedenen Arten zur Verfügung.<br><br>
  Statuscode: 400<br><br>
</p>
