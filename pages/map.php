<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Raumplan';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2>Raumplan</h2>
<style>.E{font-size:85px;fill:var(--secondary-text-color);}</style>
<?php include ($_SERVER['DOCUMENT_ROOT']).'/images/map_0.svg'; ?>
<?php include ($_SERVER['DOCUMENT_ROOT']).'/images/map_1.svg'; ?>
<?php include ($_SERVER['DOCUMENT_ROOT']).'/images/map_2.svg'; ?>
<p>
  Dr&uuml;cken Sie auf die Raumnummern um zum Aussteller zu springen.
</p>
<button onclick="showFloor0()" type="button">Erdgeschoss</button>
<button onclick="showFloor1()" type="button">Erster Stock</button>
<button onclick="showFloor2()" type="button">Zweiter Stock</button>
<h2>Aussteller</h2>
<h2><br>Technische Umsetzung</h2>
<hr>
<div id="314">
  <h2>co.Tec</h2>
  <p>
    Raum: 314<br>
    Office 365 f&uuml;r Schule/Lehrer/Sch&uuml;ler – Schullizenz
  </p>
  <button onclick="location.href='https://www.cotec.de'" type="button">Zur Homepage</button>
</div>
<div id="">
  <h2>Endoo</h2>
  <p>
    Raum: ???<br>
    Professionelles Schul-WLAN und Netzwerkmanagement
  </p>
  <button onclick="location.href='https://www.cotec.de'" type="button">Zur Homepage</button>
</div>
<div id="PH1">
  <h2>heinekingmedia</h2>
  <p>
    Raum: PH1<br>
    Das Digitale Schwarze Brett (DSB) als Informationsplattform mit App
  </p>
  <button onclick="location.href='https://heinekingmedia.de'" type="button">Zur Homepage</button>
</div>
<div id="210">
  <h2>OctoGate</h2>
  <p>
    Raum: 210<br>
    WLAN-L&ouml;sung f&uuml;r Schulen
  </p>
  <button onclick="location.href='http://octogate.de/de/uebersicht.html'" type="button">Zur Homepage</button>
</div>
<div id="311">
  <h2>RBI Rittershofer</h2>
  <p>
    Raum: 311<br>
    Medienw&auml;gen f&uuml;r die Klassenzimmer und Konferenzen
  </p>
  <button onclick="location.href='http://rbi-rittershofer.de'" type="button">Zur Homepage</button>
</div>
<div id="">
  <h2>Sdui</h2>
  <p>
    Raum: ???<br>
    Einfach kommunizieren &amp; organisieren mit der Schul-App Sdui
  </p>
  <button onclick="location.href='https://www.sdui.de'" type="button">Zur Homepage</button>
</div>
<div id="312">
  <h2>St&uuml;ber Systems Berlin</h2>
  <p>
    Raum: 312<br>
    Kabellose Bildschirmpr&auml;sentation mit EZ-Cast Pro2
  </p>
  <button onclick="location.href='https://www.stueber.de'" type="button">Zur Homepage</button>
</div>
<div id="208">
  <h2>Untis BW</h2>
  <p>
    Raum: 208<br>
    Stunden- und Vertretungsplanung.
    Apps und Software f&uuml;r Vertretungsplan, Kommunikation und Dateientausch in Lerngruppen
  </p>
  <button onclick="location.href='https://untis-baden-wuerttemberg.de'" type="button">Zur Homepage</button>
</div>
<div id="313">
  <h2>Visucom</h2>
  <p>
    Raum: 313<br>
    Klassenzimmertechnik
  </p>
  <button onclick="location.href='https://www.visucomshop.de'" type="button">Zur Homepage</button>
</div>
<h2><br>Didaktik und Unterricht</h2>
<hr>
<div id="205">
  <h2>Cornelsen</h2>
  <p>
    Raum: 205<br>
    Schulb&uuml;cher und ihre digitalen Hilfsmittel f&uuml;r Unterrichtsvorbereitung und -durchf&uuml;hrung
  </p>
  <button onclick="location.href='https://www.cornelsen.de'" type="button">Zur Homepage</button>
</div>
<div id="PH2">
  <h2>Flip the Classroom</h2>
  <p>
    Raum: PH2<br>
    Einsatz und Erstellung von Erkl&auml;rvideos im Unterricht
  </p>
  <button onclick="location.href='https://fliptheclassroom.de'" type="button">Zur Homepage</button>
</div>
<div id="304">
  <h2>Hochschule der Medien Stuttgart</h2>
  <p>
    Raum: 304<br>
    Digitale Lehr- und Lernformen
  </p>
  <button onclick="location.href='https://www.hdm-stuttgart.de'" type="button">Zur Homepage</button>
</div>
<div id="207">
  <h2>Klett</h2>
  <p>
    Raum: 207<br>
    Schulb&uuml;cher und ihre digitalen Hilfsmittel f&uuml;r Unterrichtsvorbereitung und -durchf&uuml;hrung
  </p>
</div>
<div id="CH1">
  <h2>Lehrer berichten | Chemie</h2>
  <p>
    Raum: CH1<br>
    Best Practice aus dem Unterrichtsalltag
  </p>
</div>
<div id="CH2">
  <h2>Lehrer berichten | Englisch</h2>
  <p>
    Raum: CH2<br>
    Best Practice aus dem Unterrichtsalltag
  </p>
</div>
<div id="MU1">
  <h2>Lehrer berichten | Musik</h2>
  <p>
    Raum: MU1<br>
    Best Practice aus dem Unterrichtsalltag
  </p>
</div>
<div id="BIO1">
  <h2>Lehrer berichten | NWT</h2>
  <p>
    Raum: BIO1<br>
    Best Practice aus dem Unterrichtsalltag
  </p>
</div>
<div id="325">
  <h2>Lehrer berichten | Sport</h2>
  <p>
    Raum: 325<br>
    Best Practice aus dem Unterrichtsalltag
  </p>
</div>
<div id="310">
  <h2>Medienzentrum Mittelbaden SESAM</h2>
  <p>
    Raum: 310<br>
    Lehrfilme f&uuml;r den Unterricht zum Streamen, Downloaden und Teilen mit den Sch&uuml;lern
  </p>
  <button onclick="location.href='https://www.lmz-bw.de/medien-und-bildung/sesam-mediathek/'" type="button">Zur Homepage</button>
</div>
<div id="324">
  <h2>Sch&uuml;ler berichten</h2>
  <p>
    Raum: 324<br>
    Wie Schüler im regul&auml;ren Unterricht mit digitalen Hilfsmitteln arbeiten
  </p>
</div>
<div id="101">
  <h2>Sch&uuml;lermedienmentoren</h2>
  <p>
    Raum: 101<br>
    Eine Gruppe freiwillig engagierter Schüler und Lehrer, die sich am Wilhelm-Hausenstein-Gymnasium um die digitale und mediale Sparte der Bildung kümmern
  </p>
</div>
<h2><br>Konzeption und Umsetzung</h2>
<hr>
<div id="301">
  <h2>Arbeitsgruppe &bdquo;Bildung im digitalen Zeitalter&rdquo;</h2>
  <p>
    Raum: 301<br>
    Fortbildungskonzept, Implementierung digitaler Arbeitsfomen, Wartung, Fortbildung, Gestaltung
  </p>
</div>
<div id="307">
  <h2>LRA Rastatt</h2>
  <p>
    Raum: 307<br>
    IT-Entwicklungsplan und Begleitung der Kreisschulen
  </p>
  <button onclick="location.href='https://www.landkreis-rastatt.de'" type="button">Zur Homepage</button>
</div>
<div id="308">
  <h2>Medienzentrum Mittelbaden MEP</h2>
  <p>
    Raum: 308<br>
    Inhalte und Erstellung eines Medienentwicklungsplans am Beispiel des WHGs.
    3D-Druck und VR.
    M&ouml;glichkeiten im Unterricht und Expertise
  </p>
  <button onclick="location.href='https://www.mz-mittelbaden.de'" type="button">Zur Homepage</button>
</div>
<div id="302">
  <h2>Schulleitung</h2>
  <p>
    Raum: 302<br>
    Digitalisierung im Kontext des allgemeinen Bildungsauftrags am Gymnasium
  </p>
</div>
<div id="303">
  <h2>Studienseminar Karlsruhe</h2>
  <p>
    Raum: 303<br>
    Seminar f&uuml;r Ausbildung und Fortbildung der Lehrkr&auml;fte (Gymnasium)
  </p>
  <button onclick="location.href='http://gym.seminar-karlsruhe.de/'" type="button">Zur Homepage</button>
</div>
<script src="/js/map.min.js" async></script>
<script src="/js/selected.min.js" async></script>
