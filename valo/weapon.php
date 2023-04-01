<?php
include "apiweapon.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Valorant</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="icon" src="icon.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Agent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="weapon.php">Weapon</a>
            </li>
        </ul>
    </div>
</nav>
<table class="table table-dark table-hover text-center">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th><br>
        </tr>
    </thead>
    <tbody>
        <?php foreach($Weapons as $i => $Weapon): ?>

            <?php
                $str = $Weapon['category'];
                $arr = explode("::", $str);
                $category = $arr[1];

            ?>

        <tr>

            <th scope="row"><?php echo $i + 1 ?></th>
            <td><?php echo $Weapon['displayName'] ?></td>
            <td><?php echo $category ?></td>
            <td><img id="img-weapon" src="<?php echo $Weapon['displayIcon'] ?>" alt=""></td>

        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>