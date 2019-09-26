<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 505';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>HTTP Version nicht unterstützt</h2>
<p>
  Die benutzte HTTP-Version wird vom Server nicht unterstützt oder abgelehnt.<br><br>
  Fehlercode: 505<br><br>
</p>
