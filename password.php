<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="fw-bold m-0"><?= $_SESSION['password'] ?></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>