<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Karte';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Karte</h2>
<?php include ($_SERVER['DOCUMENT_ROOT']).'/images/map_0.svg'; ?>
<?php include ($_SERVER['DOCUMENT_ROOT']).'/images/map_1.svg'; ?>
<?php include ($_SERVER['DOCUMENT_ROOT']).'/images/map_2.svg'; ?>
<button onclick="showFloor0()" type="button">Erdgeschoss</button>
<button onclick="showFloor1()" type="button">Erster Stock</button>
<button onclick="showFloor2()" type="button">Zweiter Stock</button>
<h2>Aussteller</h2>
<h2>Cornelsen</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Klett</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Mediengestützte Didaktik</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>RBI Rittershofer GmbH (Medieneinheiten)</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Sch&uuml;lermedienmentoren</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>St&uuml;ber Systems GmbH (EZCast)</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Visocom (Medieneinheiten)</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<script src="/js/map.min.js" async></script>
