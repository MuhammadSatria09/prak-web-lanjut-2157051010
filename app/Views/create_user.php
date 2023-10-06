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
        <tr>
            <td>
                Nama : <input type="text" name="nama" required>   
            </td>
        </tr>
        <tr>
            <td>
                NPM : <input type="text" name="npm" required>
            </td>
        </tr>
        <tr>
            <td>
                Kelas : <input type="text" name="kelas" required>                  
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn" type="submit">submit</button>
            </td>
        </tr>

        </table>
    </form>
    </div>
</body>
</html>