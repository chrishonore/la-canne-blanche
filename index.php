<?php
    require 'helper.php';

$page = 'home';
if (    isset($_GET['page'])) $page = $_GET['page'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo getPageTitle($page) ?></title>
</head>
<body>
    <?php
        include 'layouts/nav.php';
        include 'router.php';
        include 'layouts/footer.php';
    ?>
</body>
</html>