<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/profile.css")?>">
</head>

<body>
<div class = 'container '> 

<img src="<?php echo base_url('assets/img/sigma.jpg');?>" alt="">

    <table>
    <tr>
        <td>
            <?= $nama ?>
        </td>
    </tr>
    <tr>
        <td>
            <?= $kelas ?>
        </td>
    </tr>
    <tr>
        <td>
            <?= $npm ?>
        </td>
    </tr>
    </table>

</div>
    
</body>
</html>