<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Fehler 502';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Bad Gateway</h2>
<p>
  Der Server konnte seine Funktion als Gateway oder Proxy nicht erfüllen,<br>
  weil er seinerseits eine ungültige Antwort erhalten hat.<br><br>
  Fehlercode: 502<br><br>
</p>
