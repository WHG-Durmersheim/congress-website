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
<hr>
<h2>co.Tec</h2>
<p>
  Raum: 000<br>
  Office 365 f&uuml;r Schule/Lehrer/Sch&uuml;ler – Schullizenz
</p>
<h2>heinekingmedia</h2>
<p>
  Raum: 000<br>
  Das Digitale Schwarze Brett (DSB) als Informationsplattform mit App
</p>
<h2>OctoGate</h2>
<p>
  Raum: 000<br>
  WLAN-L&ouml;sung f&uuml;r Schulen
</p>
<h2>RBI Rittershofer</h2>
<p>
  Raum: 000<br>
  Medienw&auml;gen f&uuml;r die Klassenzimmer und Konferenzen
</p>
<h2>St&uuml;ber Systems Berlin</h2>
<p>
  Raum: 000<br>
  Kabellose Bildschirmpr&auml;sentation mit EZ-Cast Pro2
</p>
<h2>Untis BW</h2>
<p>
  Raum: 000<br>
  Stunden- und Vertretungsplanung.
  Apps und Software f&uuml;r Vertretungsplan, Kommunikation und Dateientausch in Lerngruppen
</p>
<h2>Visucom</h2>
<p>
  Raum: 000<br>
  Klassenzimmertechnik
</p>
<h2><br>Didaktik und Unterricht</h2>
<hr>
<h2>Cornelsen</h2>
<p>
  Raum: 000<br>
  Schulb&uuml;cher und ihre digitalen Hilfsmittel f&uuml;r Unterrichtsvorbereitung und -durchf&uuml;hrung
</p>
<h2>Flip the Classroom</h2>
<p>
  Raum: 000<br>
  Einsatz und Erstellung von Erkl&auml;rvideos im Unterricht
</p>
<h2>Hochschule der Medien Stuttgart</h2>
<p>
  Raum: 000<br>
  Digitale Lehr- und Lernformen
</p>
<h2>Klett</h2>
<p>
  Raum: 000<br>
  Schulb&uuml;cher und ihre digitalen Hilfsmittel f&uuml;r Unterrichtsvorbereitung und -durchf&uuml;hrung
</p>
<h2>Lehrer berichten</h2>
<p>
  Raum: 000<br>
  Best Practice aus dem Unterrichtsalltag
</p>
<h2>Medienzentrum Mittelbaden SESAM</h2>
<p>
  Raum: 000<br>
  Lehrfilme f&uuml;r den Unterricht zum Streamen, Downloaden und Teilen mit den Sch&uuml;lern
</p>
<h2><br>Konzeption und Umsetzung</h2>
<hr>
<h2>Arbeitsgruppe &bdquo;Bildung im digitalen Zeitalter&rdquo;</h2>
<p>
  Raum: 000<br>
  Fortbildungskonzept, Implementierung digitaler Arbeitsfomen, Wartung, Fortbildung, Gestaltung
</p>
<h2>LRA Rastatt</h2>
<p>
  Raum: 000<br>
  IT-Entwicklungsplan und Begleitung der Kreisschulen
</p>
<h2>Medienzentrum Mittelbaden MEP</h2>
<p>
  Raum: 000<br>
  Inhalte und Erstellung eines Medienentwicklungsplans am Beispiel des WHGs.
  3D-Druck und VR.
  M&ouml;glichkeiten im Unterricht und Expertise
</p>
<h2>Schulleitung</h2>
<p>
  Raum: 000<br>
  Digitalisierung im Kontext des allgemeinen Bildungsauftrags am Gymnasium
</p>
<h2>Studienseminar Karlsruhe</h2>
<p>
  Raum: 000<br>
  Seminar f&uuml;r Ausbildung und Fortbildung der Lehrkr&auml;fte (Gymnasium)
</p>
<script src="/js/map.min.js" async></script>
