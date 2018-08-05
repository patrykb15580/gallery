<!DOCTYPE html>
<html lang="pl" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="noodp" name="robots">
        <meta content="noydir" name="robots">
        <title>Booklet.pl - galeria</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- CSS -->
        <link rel="stylesheet" href="/public/assets/css/normalize.css">
        <link rel="stylesheet" href="/public/assets/css/application.css">

        <!-- JS -->
        <script src="/public/assets/js/jQuery.min.js" charset="utf-8"></script>
    </head>
    <body data-env="<?= Config::get('env') ?>">
        <?php include 'app/views/shared/_header.php'; ?>
        <div id="content">
            <?php include ($path) ? $path : 'app/views/shared/404.php'; ?>
        </div>
        <?php include 'app/views/shared/_footer.php'; ?>
        <script src="/public/assets/js/application.js" charset="utf-8"></script>
    </body>
</html>
