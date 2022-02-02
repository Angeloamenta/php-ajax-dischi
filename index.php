<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- header da importare -->
    <?php include_once __DIR__ . '/partials/header.php' ?>
    <!-- main -->
    <main>
        <div class="container">
            <div class="albums">
                <?php include_once __DIR__ . '/partials/albums.php' ?>
            </div>
        </div>
    </main>

    <!-- footer da importare -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>
</body>
</html>