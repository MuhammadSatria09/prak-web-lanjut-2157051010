<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/create.css")?>">
</head>
<body>
    
    <div class="create">
    <form action="<?= base_url('/user/store') ?>" method="post">
        <table>
            
        <?php if (session('validation')) : ?>
            <ul>
                <?php foreach (session('validation')->getErrors() as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>

        <tr>
            <td>
                Nama : <input type="text" name="nama" >
                <?= $validation->listErrors(); ?>
            </td>
        </tr>
        <tr>
            <td>
                NPM : <input type="text" name="npm" >
            </td>
        </tr>
        <tr>
            <td>
                Kelas : 
                <select class="form-select" name="kelas" id="kelas">
                    <?php
                        foreach ($kelas as $item){
                    ?>
                            <option value="<?= $item['id'] ?>">
                                           <?= $item['nama_kelas']?>
                            </option>
                    <?php
                        }
                    ?>
                </select>                  
            </td>
        </tr>
        <tr>
            <td style="display: flex;align-items: center;justify-content: center;align-content: flex-end;">
                <button class="btn" type="submit">submit</button>
            </td>
        </tr>

        </table>
    </form>
    </div>
</body>
</html>