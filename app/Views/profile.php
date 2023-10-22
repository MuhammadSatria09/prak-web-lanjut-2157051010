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

<img src="<?= $user['foto']  ?? '<default-foto>'?>" alt="">

    <table>
    <tr>
        <td>
            <?=$user['nama']?>
        </td>
    </tr>
    <tr>
        <td>
            <?= $user['nama_kelas'] ?>
        </td>
    </tr>
    <tr>
        <td>
            <?= $user['npm'] ?>
        </td>
    </tr>
    </table>

</div>
    
</body>
</html>