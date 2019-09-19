<?php
  require_once('PageLayout.php');
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; echo ' - '; } ?>Kongress</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

</body>
</html>
