<?php
include "api.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Pokemon</title>
</head>
<body>
<table class="table table-dark table-hover text-center">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Front</th>
        <th scope="col">Shiny</th>
        <th scope="col">Ability</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pokemon as $i => $data): ?>

            <?php
            $resp = file_get_contents($data['url']);
            $pokemonData = json_decode($resp, true);
            ?>

        <tr>
        <th scope="row"><?php echo $i + 1 ?></th>
        <td><?php echo $data['name'] ?></td>
        <td><img src="<?php echo $pokemonData['sprites']['front_default'] ?>" class="sprite"></td>
        <td><img src="<?php echo $pokemonData['sprites']['front_shiny'] ?>" class="sprite"></td>

        <td>
        <?php foreach($pokemonData['abilities'] as $n => $bailities): ?>
        <li><?php echo strtoupper($bailities['ability']['name']) ?></li>
        <?php endforeach; ?>
        </td>

        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>