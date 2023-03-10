<?php

function addPickup($data)
{
    $url = 'http://localhost/webApp_sandweches/food-api/API/order/pickup/addPickup.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request 

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("name" => "$data")));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response; 
}

function addTag($data)
{
    $url = 'http://localhost/WebApp_sandweches/food-api/API/tag/createTag.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("tag_name" => "$data")));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response->Creation; 
}

function addAllergen($data){
    $url = 'http://localhost/WebApp_sandweches/food-api/API/allergen/createAllergen.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("name" => "$data")));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response->Message; 
}

function addOffer($data){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/offer/createOffer.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    $response = $response->Message; 

    return $response;
}
function addClass($data){

    $url = 'http://localhost/WebApp_sandweches/food-api/API/user/addClass.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);

    return $response;
}

function addIngredient($data){
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $quantity = $data['quantity']; 

    $url = 'http://localhost/webApp_sandweches/food-api/API/product/setIngredient.php?name='.$name.'&description='.$description.'&price='.$price.'&quantity='.$quantity; 

    $json_data = file_get_contents($url);

    $decode_data = json_decode($json_data, $assoc = true);

    $ing_data = $decode_data;
    $ing_arr = array();

    foreach ($ing_data as $ing) {
        $ing_record = array(
            'name' => $ing['name'],
            'price' => $ing['price'],
            'quantity' => $ing['quantity'],
        );
        array_push($ing_arr, $ing_record);
    }

    return $ing_arr; 

}

?>