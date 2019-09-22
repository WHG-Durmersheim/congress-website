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
  <meta name="description" content="TODO" />
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
    <form id="searchHeader" action="/pages/search" autocomplete="off" class="hidden">
      <input type="text" name="q" placeholder="Suche">
      <button id="closeBtn" class="header-button" type="button" onclick="closeSearch()">Schlie&szlig;en</button>
    </form>
  </header>
  <div id="nav-bg"></div>
  <nav>
    <div id="nav-img">Ein Bild der Schule</div>
    <a class="nav-link" href="/">Home</a>
    <a class="nav-link" href="/pages/map">Karte</a>
    <a class="nav-link" href="/pages/recordings">Aufnahmen</a>
    <a class="nav-link" href="/pages/imprint">Impressum</a>
  </nav>
  <section id="main">

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

  </section>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/header.min.js" async></script>
</body>
</html>
