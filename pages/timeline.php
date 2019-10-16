<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Zeitplan';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Zeitplan</h2>
<div id="1400">
  <h2>14:00 - 14:15 | Einf&uuml;hrung</h2>
  <p>
    StD Kress SSL
  </p>
</div>
<div id="1415">
  <h2>14:15 - 15:00 | Keynote</h2>
  <p>
    Prof. Dr. Thissen<br>
    <a href="/pages/livestream.php">Zum Livestream</a>
  </p>
</div>
<div id="1500">
  <h2>15:00 - 17:00 | Angebote</h2>
  <p>
    &bdquo;Digitalisierung im Fokus&rdquo;<br>
    Anschauen, Ausprobieren, Informieren, Nachfragen
  </p>
</div>
<div id="1700">
  <h2>17:00 - 18:00 | Forum</h2>
  <p>
    &bdquo;Schulische Bildung im digitalen Zeitalter –  quo vadis?&rdquo;<br>
    OStD Dornblüth, Prof. Florêncio Bonnet, Jacob (LRA RA), MdB Katzmarek, Prof. Dr. Thissen<br>
    <a href="/pages/livestream.php">Zum Livestream</a>
  </p>
</div>
<script src="/js/selected.min.js" async></script>
