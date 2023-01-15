<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->section('meta') ?>
    <link rel="stylesheet" href="<?= $this->asset('/css/main.css') ?>" />
</head>

<body>
    <?= $this->section('content') ?>
    <script src="<?= $this->asset('/js/main.js') ?>"></script>
</body>

</html>