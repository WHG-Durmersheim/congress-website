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
    <h2>Karte</h2>
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
</section>
<script src="/js/search.min.js" async></script>
