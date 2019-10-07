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
<h2><br>Technische Umsetzung</h2>
<h2>co.Tec</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>heinekingmedia</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>OctoGate</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>RBI Rittershofer</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>St&uuml;ber Systems Berlin</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Untis BW</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Visucom</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2><br>Didaktik und Unterricht</h2>
<h2>Cornelsen</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Flip the Classroom</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Hochschule der Medien Stuttgart</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Klett</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Lehrer berichten</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Medienzentrum Mittelbaden SESAM</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2><br>Konzeption und Umsetzung</h2>
<h2>Arbeitsgruppe &bdquo;Bildung im digitalen Zeitalter&rdquo;</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>LRA Rastatt</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Medienzentrum Mittelbaden MEP</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Schulleitung</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<h2>Studienseminar Karlsruhe</h2>
<p>
  Raum: 000<br>
  Eine kleine Beschreibung des Ausstellers.
</p>
<script src="/js/map.min.js" async></script>
