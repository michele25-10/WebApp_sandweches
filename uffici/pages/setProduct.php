<?php

session_start(); 
if(empty($_SESSION['user_id'])){
    header('location: ../index.php'); 
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sandwech | Prodotti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
  <?php require_once(__DIR__ . '\navbar.php'); ?>

  <div class="container">
    <div class="row mt-5">
      <h2>Inserisci un nuovo prodotto:</h2>
    </div>
    <div class="row mt-5">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <form method="post">
              <td>
                <input class="form-control" type="" id="id" placeholder="Nome" name="name" maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Prezzo" name="price" maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Descrizione" name="description" maxlength="50"
                  required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Quantità" name="quantity" maxlength="50"
                  required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Id prodotti nutrizionali"
                  name="nutritional_value" maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Attivo" name="active" maxlength="50" required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Id allergene" name="allergen" maxlength="50"
                  required>
              </td>
              <td>
                <input class="form-control" type="" id="id" placeholder="Id tag" name="tag" maxlength="50" required>
              </td>
              <td>
                <button type="submit" class="btn btn-success">Inserisci</button>
              </td>
            </form>
          </tr>
        </tbody>
      </table>

      <?php
      include_once dirname(__FILE__) . '/../function/product.php';

      //Allergeni
      $allergen_arr = getAllergen();
      if (!empty($allergen_arr) && $allergen_arr != -1) {
        echo ('<hr>');

        echo ('<h2>Ecco la tabella degli allergeni:</h2>');

        echo ('<table class="table table-striped">');
        echo ('<thead>');
        echo ('<tr>');
        echo ('<th scope="col">');
        echo ('ID'); //Id allergene
        echo ('</th>');
        echo ('<th scope="col">');
        echo ('Nome'); //Nome allergene
        echo ('</th>');
        echo ('</tr>');
        echo ('</th>');

        echo ('<tbody>');

        foreach ($allergen_arr as $row) {
          echo ('<tr>');

          foreach ($row as $cell) {
            echo ('<th scope="row">' . $cell . '</th>');
          }

          echo ("</tr>\n");
        }
        echo ('</tbody>');
        echo ('</table>');
      } else {
        echo ('<p class="text-danger fw-bold mt-3 ms-3">Errore, non ci sono allergeni nel db.</p>');
      }

      //Tags
      $tag_arr = getTag();
      if (!empty($tag_arr) && $tag_arr != -1) {
        echo ('<hr>');

        echo ('<h2>Ecco la tabella dei tag:</h2>');

        echo ('<table class="table table-striped">');
        echo ('<thead>');
        echo ('<tr>');
        echo ('<th scope="col">');
        echo ('ID'); //Id tag
        echo ('</th>');
        echo ('<th scope="col">');
        echo ('Nome'); //Nome tag
        echo ('</th>');
        echo ('</tr>');
        echo ('</th>');

        echo ('<tbody>');

        foreach ($tag_arr as $row) {
          echo ('<tr>');

          foreach ($row as $cell) {
            echo ('<th scope="row">' . $cell . '</th>');
          }

          echo ("</tr>\n");
        }
        echo ('</tbody>');
        echo ('</table>');
      } else {
        echo ('<p class="text-danger fw-bold mt-3 ms-3">Errore, non ci sono tag nel db.</p>');
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $data = array(
          "name" => $_POST['name'],
          "price" => $_POST['price'],
          "description" => $_POST['description'],
          "quantity" => $_POST['quantity'],
          "nutritional_value" => $_POST['nutritional_value'],
          "active" => $_POST['active'],
          "allergen" => $_POST['allergen'],
          "tag" => $_POST['tag'],
        );
      
      //Prodotti
      $prod_arr = setProduct($data);
      if (!empty($prod_arr) && $prod_arr != -1) {
        echo ('<hr>');

        echo ('<h2>Ecco la tabella dei prodotti:</h2>');

        echo ('<table class="table table-striped">');
        echo ('<thead>');
        echo ('<tr>');
        echo ('<th scope="col">');
        echo ('ID'); //Id prodotto
        echo ('</th>');
        echo ('<th scope="col">');
        echo ('Nome'); //Nome prodotto
        echo ('</th>');
        echo ('<th scope="col">');
        echo ('Quantità'); //Quantità prodotto
        echo ('</th>');
        echo ('<th scope="col">');
        echo ('Kcal'); //Kcal prodotto
        echo ('</th>');
        echo ('</tr>');
        echo ('</th>');

        echo ('<tbody>');

        foreach ($prod_arr as $row) {
          echo ('<tr>');

          foreach ($row as $cell) {
            echo ('<th scope="row">' . $cell . '</th>');
          }

          echo ("</tr>\n");
        }
        echo ('</tbody>');
        echo ('</table>');

        $product_id = max($prod_arr);

        $id_max = $product_id['id'];

        $allergen_response = setAllergenProduct($data, $id_max);

        if (!empty($allergen_response)) {
          echo ('<p class="text-success fw-bold mt-3 ms-3">' . $allergen_response->message . '</p>');
        }

        $tag_res = setTagProduct($data, $id_max);

        if (!empty($tag_res)) {
          echo ('<p class="text-success fw-bold mt-3 ms-3">' . $tag_res->Setting . '</p>');
        }
      }else {
        echo ('<p class="text-danger fw-bold mt-3 ms-3">Errore inserimento dati dei prodotti nel db');
      }
      } 
      ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>