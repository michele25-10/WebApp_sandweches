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
    <title>Sandwech</title>
  </head>
  <body>

    <div class="container-fluid">
        <form method="post">
            <form method="post">
              <h1>Id carrello da visualizzare</h1>
              <input type="" id="name" placeholder="id" name="id" maxlength="50" required>
              <button type="submit" name="user">Invia</button>
              <br>
              <br>
              <br>
            </form>
            
        </form>
    </div>
  </body>
</html>
<?php

include_once dirname(__FILE__) . '/../function/cart.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['id'])) {
    $data = $_POST['id'];
    $cart_arr = viewCart($data); 

    if(!empty($cart_arr) && $cart_arr != -1){
      //trasforma un array di array in una tabella
      echo('<table>');
      echo('<tr>'); 
      echo('<td>product</td><td>quantity</td><td>name</td><td>price</td><td>description</td><td>tag_id</td>'); 
      echo('</tr>');  
      foreach($cart_arr as $row) {
          //ogni elemento dell'array è un array a sua volta, per la precisione una riga della tabella
          echo('<tr>');
          foreach($row as $cell) {
              //ogni elemento della riga è finalmente una cella
              echo('<td>'.$cell.'</td>');
          }
          echo("</tr>\n");
      }
      echo('</table>');
    }
    else{
      echo ('<p>Errore id carrello inesistente</p>');  
    }
  } 
  }
 
?>