<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="/build/output.css" rel="stylesheet">
  <title>NovaCraft Studio - Contact</title>
</head>
<body class="bg-gray-50 text-gray-800">
  <?php require_once  $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';?>


  <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>
    <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
      <input type="text" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg">
      <input type="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg">
      <textarea placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg"></textarea>
      <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
  </section>

  <?php require_once  $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
</body>
</html>
