<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Datenschutzerklärung';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Datenschutzerkl&auml;rung</h2>
<p>
  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
</p>
