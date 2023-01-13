<?php

function disactiveUser($data){
    
    $id = $data;

    $url = "http://localhost/webApp_sandweches/food-api/API/user/deleteAccount.php?id=" . $id; 

    $json_data = file_get_contents($url);

    return $json_data; 
}

function changePassword($data){

    $url = "http://localhost/webApp_sandweches/food-api/API/user/changePassword.php"; 

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

?>