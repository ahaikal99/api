<?php

$url = "https://pokeapi.co/api/v2/pokemon/";

// Fetch data from the API
$response = file_get_contents($url);

    if ($response === false) {
        // If there was an error fetching data, display an error message
        echo "Error fetching data from the PokeAPI";

    } else {
        // Decode the response as a JSON object
        $data = json_decode($response, true);
        print_r($data);
    }

?>