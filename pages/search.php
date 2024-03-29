<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Suche';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<style><?php include($_SERVER['DOCUMENT_ROOT']).'/css/search.min.css'; ?></style>
<h2>Ergebnisse f&uuml;r &bdquo;<span id="results-for"></span>&ldquo;</h2>
<section id="results">
  <a href="/">
    <h2>Home</h2>
    <p>Die Startseite dieser Webseite mit allgemeinen Informationen zum Kongress.</p>
  </a>
  <a href="/pages/map.php">
    <h2>Raumplan</h2>
    <p>Eine Karte mit Informationen, was wo zu finden ist.</p>
  </a>
  <a href="/pages/timeline.php">
    <h2>Zeitplan</h2>
    <p>Ein Zeitplan mit Informationen, was wann stattfindet.</p>
  </a>
  <a href="/pages/recordings.php">
    <h2>Aufnamen</h2>
    <p>Eine Seite mit Aufnahmen des Kongresses.</p>
  </a>
  <a href="/pages/livestream.php">
    <h2>Livestream</h2>
    <p>Eine Seite mit dem Livestream des Kongresses.</p>
  </a>
  <a href="/pages/journey.php">
    <h2>Anfahrt</h2>
    <p>Hier finden sie Informationen, wie sie uns erreichen können.</p>
  </a>
  <a href="/pages/signup.php">
    <h2>Anmeldung</h2>
    <p>Anmeldung als Schule/Institution &uuml;ber das Medienzentrum Mittelbaden.</p>
  </a>
  <a href="/pages/imprint.php">
    <h2>Impressum</h2>
    <p>Das Impressum dieser Website</p>
  </a>
  <a href="/pages/privacy.php">
    <h2>Datenschutzerklärung</h2>
    <p>Die Datenschutzerklärung der Website</p>
  </a>
  <a href="/pages/timeline.php#1400">
    <h2>14:00 - 14:15 | Einf&uuml;hrung</h2>
    <p>
      StD Kress SSL
    </p>
  </a>
  <a href="/pages/timeline.php#1415">
    <h2>14:15 - 15:00 | Keynote</h2>
    <p>
      Prof. Dr. Thissen
    </p>
  </a>
  <a href="/pages/timeline.php#1500">
    <h2>15:00 - 17:00 | Angebote</h2>
    <p>
      &bdquo;Digitalisierung im Fokus&rdquo;<br>
      Anschauen, Ausprobieren, Informieren, Nachfragen
    </p>
  </a>
  <a href="/pages/timeline.php#1700">
    <h2>17:00 - 18:00 | Forum</h2>
    <p>
      &bdquo;Schulische Bildung im digitalen Zeitalter –  quo vadis?&rdquo;<br>
      OStD Dornblüth, Prof. Florêncio Bonnet, Jacob (LRA RA), MdB Katzmarek, Prof. Dr. Thissen
    </p>
  </a>
  <a href="/pages/map.php#203">
    <h2>co.Tec</h2>
    <p>
      Raum: 203<br>
      Office 365 f&uuml;r Schule/Lehrer/Sch&uuml;ler – Schullizenz
    </p>
  </a>
  <a href="/pages/map.php#308">
    <h2>Endoo</h2>
    <p>
      Raum: 308<br>
      Professionelles Schul-WLAN und Netzwerkmanagement
    </p>
  </a>
  <a href="/pages/map.php#PH1">
    <h2>heinekingmedia</h2>
    <p>
      Raum: PH1<br>
      Das Digitale Schwarze Brett (DSB) als Informationsplattform mit App
    </p>
  </a>
  <a href="/pages/map.php#310">
    <h2>OctoGate</h2>
    <p>
      Raum: 310<br>
      WLAN-L&ouml;sung f&uuml;r Schulen
    </p>
  </a>
  <a href="/pages/map.php#312">
    <h2>RBI Rittershofer</h2>
    <p>
      Raum: 312<br>
      Medienw&auml;gen f&uuml;r die Klassenzimmer und Konferenzen
    </p>
  </a>
  <a href="/pages/map.php#303">
    <h2>Sdui</h2>
    <p>
      Raum: 303<br>
      Einfach kommunizieren &amp; organisieren mit der Schul-App Sdui
    </p>
  </a>
  <a href="/pages/map.php#313">
    <h2>St&uuml;ber Systems Berlin</h2>
    <p>
      Raum: 313<br>
      Kabellose Bildschirmpr&auml;sentation mit EZ-Cast Pro2
    </p>
  </a>
  <a href="/pages/map.php#204">
    <h2>Untis BW</h2>
    <p>
      Raum: 204<br>
      Stunden- und Vertretungsplanung.
      Apps und Software f&uuml;r Vertretungsplan, Kommunikation und Dateientausch in Lerngruppen
    </p>
  </a>
  <a href="/pages/map.php#314">
    <h2>Visucom</h2>
    <p>
      Raum: 314<br>
      Klassenzimmertechnik
    </p>
  </a>
  <a href="/pages/map.php#205">
    <h2>Cornelsen</h2>
    <p>
      Raum: 205<br>
      Schulb&uuml;cher und ihre digitalen Hilfsmittel f&uuml;r Unterrichtsvorbereitung und -durchf&uuml;hrung
    </p>
  </a>
  <a href="/pages/map.php#PH2">
    <h2>Flip the Classroom</h2>
    <p>
      Raum: PH2<br>
      Einsatz und Erstellung von Erkl&auml;rvideos im Unterricht
    </p>
  </a>
  <a href="/pages/map.php#207">
    <h2>Klett</h2>
    <p>
      Raum: 207<br>
      Schulb&uuml;cher und ihre digitalen Hilfsmittel f&uuml;r Unterrichtsvorbereitung und -durchf&uuml;hrung
    </p>
  </a>
  <a href="/pages/map.php#CH1">
    <h2>Lehrer berichten | Chemie</h2>
    <p>
      Raum: CH1<br>
      Best Practice aus dem Unterrichtsalltag
    </p>
  </a>
  <a href="/pages/map.php#MU1">
    <h2>Lehrer berichten | Musik</h2>
    <p>
      Raum: MU1<br>
      Best Practice aus dem Unterrichtsalltag
    </p>
  </a>
  <a href="/pages/map.php#BIO1">
    <h2>Lehrer berichten | NWT</h2>
    <p>
      Raum: BIO1<br>
      Best Practice aus dem Unterrichtsalltag
    </p>
  </a>
  <a href="/pages/map.php#325">
    <h2>Lehrer berichten | Sport</h2>
    <p>
      Raum: 325<br>
      Best Practice aus dem Unterrichtsalltag
    </p>
  </a>
  <a href="/pages/map.php#302">
    <h2>Lernplattformen und Apps im Einsatz</h2>
    <p>
      Raum: 302<br>
      Wie können Kompetenzen mit digitalen Anwendungen gefördert werden?
      Welche Rolle spielen Lernplattformen?
    </p>
  </a>
  <a href="/pages/map.php#CO1">
    <h2>Medienzentrum Mittelbaden SESAM</h2>
    <p>
      Raum: CO1<br>
      Lehrfilme f&uuml;r den Unterricht zum Streamen, Downloaden und Teilen mit den Sch&uuml;lern
    </p>
  </a>
  <a href="/pages/map.php#324">
    <h2>Sch&uuml;ler berichten</h2>
    <p>
      Raum: 324<br>
      Wie Schüler im regul&auml;ren Unterricht mit digitalen Hilfsmitteln arbeiten
    </p>
  </a>
  <a href="/pages/map.php#101">
    <h2>Sch&uuml;lermedienmentoren</h2>
    <p>
      Raum: 101<br>
      Eine Gruppe freiwillig engagierter Schüler und Lehrer, die sich am Wilhelm-Hausenstein-Gymnasium um die digitale und mediale Sparte der Bildung kümmern
    </p>
  </a>
  <a href="/pages/map.php#301">
    <h2>Arbeitsgruppe &bdquo;Bildung im digitalen Zeitalter&rdquo;</h2>
    <p>
      Raum: 301<br>
      Fortbildungskonzept, Implementierung digitaler Arbeitsfomen, Wartung, Fortbildung, Gestaltung
    </p>
  </a>
  <a href="/pages/map.php#311">
    <h2>LRA Rastatt</h2>
    <p>
      Raum: 311<br>
      IT-Entwicklungsplan und Begleitung der Kreisschulen
    </p>
  </a>
  <a href="/pages/map.php#304">
    <h2>Medienzentrum Mittelbaden MEP</h2>
    <p>
      Raum: 304<br>
      Inhalte und Erstellung eines Medienentwicklungsplans am Beispiel des WHGs.
      3D-Druck und VR.
      M&ouml;glichkeiten im Unterricht und Expertise
    </p>
  </a>
</section>
<script src="/js/search.min.js" async></script>
