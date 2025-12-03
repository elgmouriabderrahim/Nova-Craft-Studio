<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="bg-gray-50 text-gray-800">
  <?php 
  $page = $_GET['page'] ?? 'home';
  switch ($page) {
      case 'home':
          $title = "welcome to home";
          $thispage = 'views/home.php';
          break;

      case 'services':
          $title = "NovaCraft Studio - Services";
          $thispage = 'views/services.php';
          break;

      case 'contact':
          $title = "NovaCraft Studio - contact";
          $thispage = 'views/contact.php';
          break;

      case 'about':
          $title = "NovaCraft Studio - about us";
          $thispage = 'views/about.php';
          break;

      default:
          $title = "Not Found";
          $thispage = 'views/404.php';
  }
  if($thispage == 'views/404.php')
    include "views/404.php";
  else
  include "templates/layout.php";
  ?>

</body>
</html>