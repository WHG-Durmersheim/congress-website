<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 413';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Anforderung zu groß</h2>
<p>
  Die gestellte Anfrage war zu groß, um vom Server bearbeitet werden zu können.<br><br>
  Fehlercode: 413<br><br>
</p>
