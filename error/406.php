<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 406';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Nicht Annehmbar</h2>
<p>
  Die angeforderte Ressource steht nicht in der gewünschten Form zur Verfügung.<br><br>
  Fehlercode: 406<br><br>
</p>
