<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
</head>
<body>
    <div class="navbar">
    <a href="<?= base_url('/user')?>">User</a>
    <a href="<?= base_url('/kelas')?>">Kelas</a>
    </div>
    <?= $this->renderSection('content')?>
</body>
</html>