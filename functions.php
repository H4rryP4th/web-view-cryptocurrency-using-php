<?php 

function initiateAPI(){
    $url = "https://api.nomics.com/v1/currencies/ticker?key=025d9b0940b1889c85752d1e1995840b167b47c3&convert=IDR&per-page=100&page=1";
    // init call
    $curl = curl_init($url);

    // options GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    // sent request
    $result = curl_exec($curl);

    // close connection
    curl_close($curl);
    return $result;
}

function convertIntoArray(){
    $result = initiateAPI();
    $responseArray = json_decode($result, true);

    return $responseArray;
}


