<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Anmeldung';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Anmeldung</h2>
<p>
  Anmeldung als Schule oder andere Institution &uuml;ber das Medienzentrum Mittelbaden.
</p>
<button onclick="location.href='https://t1p.de/dd2019'" type="button">Zur Anmeldung</button>
