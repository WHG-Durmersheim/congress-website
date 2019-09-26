<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 500';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Interner Serverfehler</h2>
<p>
  Ein unerwarteter Serverfehler ist aufgetreten.<br><br>
  Fehlercode: 500<br><br>
</p>
