<?php
session_start();

include_once dirname(__FILE__) . '/../function/getOrder.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['id'])) {
    $data = $_POST['id'];

    getOrderUser($data);
}
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
  </head>
  <body>

    <div class="container-fluid">
        <form method="post">
            <form method="post">
              <h1>Visualizza ordini di un utente</h1>
              <input type="" id="name" placeholder="id utente" name="id" maxlength="50" required>
              <button type="submit" name="favourite">Invia</button>
            </form>
    </div>
  </body>
</html>