<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 412';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Precondition Failed</h2>
<p>
  Eine in der Anfrage übertragene Voraussetzung trifft nicht zu.<br><br>
  Fehlercode: 412<br><br>
</p>
