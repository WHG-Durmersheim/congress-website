<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Imprint';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Datenschutzerklärung</h2>
<p>

</p>
