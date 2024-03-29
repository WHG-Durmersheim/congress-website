<?php
  require_once('PageLayout.php');
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; echo ' - '; } ?>Kongress</title>
  <link rel="stylesheet" type="text/css" href="/css/main.min.css" />
  <meta name="theme-color" content="#fff">
  <link rel="icon" href="/favicon.ico">
  <meta name="description" content="Eine Webseite für die Veranstaltung 'Schule in der digitalen Dimension' am WHG-Durmersheim" />
  <meta property="og:image" content="https://congress.n1kla5.live/preview.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
    <div id="defaultHeader">
      <button id="menuBtn" class="header-button" type="button" onclick="openMenu()">Men&uuml;</button>
      <h1 class="small-display">Kongress</h1>
      <h1 class="big-display">Schule in der digitalen Dimension</h1>
      <button id="searchBtn" class="header-button" type="button" onclick="openSearch()">Suche</button>
    </div>
    <form id="searchHeader" action="/pages/search.php" autocomplete="off" class="hidden">
      <input type="search" name="q" placeholder="Suche">
      <button id="closeBtn" class="header-button" type="button" onclick="closeSearch()">Schlie&szlig;en</button>
    </form>
  </header>
  <div id="nav-bg"></div>
  <nav>
    <div id="nav-img">Ein Bild der Schule</div>
    <a class="nav-link" href="/">Home</a>
    <a class="nav-link" href="/pages/map.php">Raumplan</a>
    <a class="nav-link" href="/pages/timeline.php">Zeitplan</a>
    <a class="nav-link" href="/pages/recordings.php">Aufnahmen</a>
    <a class="nav-link" href="/pages/livestream.php">Livestream</a>
    <a class="nav-link" href="/pages/journey.php">Anfahrt</a>
    <a class="nav-link" href="/pages/signup.php">Anmeldung</a>
    <a class="nav-link" href="/pages/imprint.php">Impressum</a>
    <a class="nav-link" href="/pages/privacy.php">Datenschutzerkl&auml;rung</a>
  </nav>
  <main>

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

  </main>
  <script src="/js/header.min.js" async></script>
</body>
</html>
