<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 504';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Zeitüberschreibung</h2>
<p>
  Der Server konnte seine Funktion als Gateway oder Proxy nicht erfüllen,<br>weil er innerhalb einer festgelegten Zeitspanne keine Antwort von seinerseits benutzten Servern oder Diensten erhalten hat.<br><br>
  Fehlercode: 504<br><br>
</p>
