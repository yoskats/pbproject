<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/vendors/bootstrap.min-4.1.3.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Phone-book</title>
</head>

<body class="bg-light">
    <?php helper('auth'); ?>
    <?= view('Views\navbar') ?>
    <?= $this->renderSection('main') ?>
    <?= view('Views\footer') ?>

    <script src="/vendors/jquery-3.5.1.min.js"></script>
    <script src="/vendors/popper-1.14.3.min.js"></script>
    <script src="/vendors/bootstrap.min-4.1.3.js"></script>
</body>

</html>