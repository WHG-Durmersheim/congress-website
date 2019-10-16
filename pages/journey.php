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
<h1>Anfahrt</h1>
<h3>Mit öffentlichen Verkehrsmitteln</h3>

<p>Mit der S 4 bis Bahnhof Durmersheim. Dann etwa 10 Minuten Fußweg zur Schule.</p>

<p><a href="http://www.efa-bw.de/" target="_blank">Fahrpläne (efa-bw.de)</a> und <a href="http://www.kvv.de/">Fahrpläne (kvv.de)</a></p>

<h3>Mit dem PKW:</h3>

<p>aus Richtung Rastatt:</p>

<li>B36 alt in Richtung Karlsruhe</li>

<li>In Höhe der Kirche St.Dionys Links abbiegen, Richtung Tiefgestade (ab hier ausgeschildert)</li>

<li>Straßenverlauf folgen</li>

<li>Rechts abbiegen in die Weißenburgerstraße</li>

<p>aus Richtung Karlsruhe:</li>

<li>B36 alt in Richtung Rastatt</li>

<li>auf Höhe der Esso-Tankstelle / Kirche Maria-Bickesheim rechts abbiegen, Richtung Tiefgestade (ab hier ausgeschildert)</p>

<li>in zweite Querstraße links, Weißenburgerstraße, einbiegen</li>
</div>
