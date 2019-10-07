<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Home';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<style><?php include($_SERVER['DOCUMENT_ROOT']).'/css/home.min.css'; ?></style>
<img class="big-image" alt="Zwei Personen sitzen auf einem Stapel von Büchern" src="/images/online_education.svg">
<p class="caption">
  <a class="caption" href="https://isometric.online/license/">Bild von Isometric</a>
</p>
<h2>Home</h2>
<p>
  Menschen denken nicht algorithmisch und Bildung ist nicht digital.
  Und dennoch können digitale Medien beim schulischen Bildungsprozess von jungen Menschen eine besondere Rolle spielen.
  <br><br>
  Hierbei scheint es wesentlich, dass digitale Medien nicht im Zentrum, sondern im Dienst dieses Bildungsprozesses stehen.<br>
  Damit Schulen der Herausforderung der unterstützenden Einbindung digitaler Prozesse in die traditionelle Unterrichtsdidaktik und deren Erweiterung durch neue technische Möglichkeiten gewachsen sein können,
  spielen zahlreiche Gelingensfaktoren eine wesentliche Rolle.
  Diese reichen von der technischen Infrastruktur einer Lernlandschaft mit einer sinnvollen Verzahnung von eingesetzten digitalen Lern-/Lehrlösungen über das Changemanagement im Rahmen der Schulentwicklung bis zur Unterstützung der Lehrer und Schüler beim Einsatz dieser Methoden im Bildungsprozess durch spezifisch abgestimmte Qualifizierungsmaßnahmen.<br>
  Am Wilhelm-Hausenstein-Gymnasium in Durmersheim wurde vor mehreren Jahren eine Arbeitsgruppe mit dem Titel „Bildung im digitalen Zeitalter“ ins Leben gerufen.
  Begleitet von Kooperationen aus dem Hochschulbereich, der Politik und der Wirtschaft versucht diese gemeinsam mit der Schulleitung den zahlreichen Dimensionen einer gelingenden Implementierung von digitalen Lern-/Lehrformaten gerecht zu werden.
  <br><br>
  Die Veranstaltung „Schule in der digitalen Dimension“ soll ein Versuch sein, alle Facetten der Digitalisierung an der Schule an einem Tag für Besucher sicht- und nachvollziehbar zu machen sowie Möglichkeiten zum vertieften Einblick in konkrete an der Schule eingesetzte Infrastruktur, Technik, Methodik und Begleitungsformate zu bieten.
  Auf dieser Grundlage soll ein Forum des Austauschs entstehen, das Chancen, Grenzen und Umsetzungsmöglichkeiten von digitalen Elementen im Bildungsprozess zum Thema hat.
  <br><br>
  Angesprochen werden sollen neben Kollegen und Schulleitungen vor allem auch politische Entscheidungsträger und Schulverwaltungsmitglieder, die durch ihr Wirken wesentliche Weichenstellungen in der Bildungslandschaft vornehmen und Entwicklungsprozesse nachhaltig beeinflussen.
</p>
