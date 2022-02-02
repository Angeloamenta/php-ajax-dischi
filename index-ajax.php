
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- header da importare -->
    <?php include_once __DIR__ . '/partials/header.php' ?>
    <!-- main -->
    <main id="app">
        <div class="container">
            <div class="albums">
                <h1>{{message}}</h1>
            </div>
        </div>
    </main>

    <!-- footer da importare -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>