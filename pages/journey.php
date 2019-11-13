<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
    $TPL = new PageLayout();
    $TPL->PageTitle = 'Anfahrt';
    $TPL->PageContent = __FILE__;
    include($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
    exit;
}
?>
<h2>Anfahrt</h2>
<h2>Mit öffentlichen Verkehrsmitteln</h2>
<p>Mit der S 4 bis Bahnhof Durmersheim. Dann etwa 10 Minuten Fußweg zur Schule.</p>
<p>Die Fahrpläne sind <a href="http://www.kvv.de/">hier (kvv.de)</a> oder über den DB-Navigator erhältlich.</p>
<h2>Mit dem PKW:</h2>
<p>aus Richtung Rastatt:</p>
<ul>
  <li>B36 alt in Richtung Karlsruhe</li>
  <li>In Höhe der Kirche St.Dionys Links abbiegen, Richtung Tiefgestade (ab hier ausgeschildert)</li>
  <li>Straßenverlauf folgen</li>
  <li>Rechts abbiegen in die Weißenburgerstraße</li>
</ul>
<p>aus Richtung Karlsruhe:</p>
<ul>
  <li>B36 alt in Richtung Rastatt</li>
  <li>auf Höhe der Esso-Tankstelle / Kirche Maria-Bickesheim rechts abbiegen, Richtung Tiefgestade (ab hier ausgeschildert)</li>
  <li>in zweite Querstraße links, Weißenburgerstraße, einbiegen</li>
</ul>
