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
  <a href="/pages/recordings.php">
    <h2>Aufnamen</h2>
    <p>Eine Seite mit Aufnahmen des Kongresses.</p>
  </a>
  <a href="/pages/livestream.php">
    <h2>Livestream</h2>
    <p>Eine Seite mit dem Livestream des Kongresses.</p>
  </a>
  <a href="/pages/imprint.php">
    <h2>Impressum</h2>
    <p>Das Impressum dieser Webseite</p>
  </a>
  <a href="/">
    <h2>Testeintrag</h2>
    <p>Eine kleine Beschreibung zum Eintrag.</p>
  </a>
</section>
<script src="/js/search.min.js" async></script>
