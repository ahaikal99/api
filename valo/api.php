<?php

$url = "https://valorant-api.com/v1/agents";

// Fetch data from the API
$response = file_get_contents($url);

    if ($response === false) {
        // If there was an error fetching data, display an error message
        echo "Error fetching data from the PokeAPI";

    } else {
        // Decode the response as a JSON object
        $data = json_decode($response, true);

        if (!isset($data['data'])) {
            // If the 'results' key is not present in the response data, display a message
            echo "No results found";

        } else {
            // Extract the 'results' array from the response data
            $agents = $data['data'];
            
        }
    }

?>