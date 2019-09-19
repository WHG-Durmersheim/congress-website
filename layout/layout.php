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
    <button id="menuBtn" class="header-button" type="button" onclick="toDo()">Menu</button>
    <h1 class="small-display">Kongress</h1>
    <h1 class="big-display">Schule in der digitalen Dimension</h1>
    <button id="searchBtn" class="header-button" type="button" onclick="toDo()">Search</button>
  </header>
  <section id="main">

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

  </section>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/header.min.js" async></script>
</body>
</html>
