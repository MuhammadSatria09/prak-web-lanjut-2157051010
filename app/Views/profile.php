<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="cont">

<div class = 'container '> 
    <table>
    <tr>
        <td>
            <img style="
                border-radius: 50%; 
                width: 250px; 
                height:250px;
                display: block;
                margin: auto;"
            src="<?= $user['foto']  ?? base_url('assets/img/sigma.jpg') ?>" alt="">
        </td>
    </tr>
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

</div>
<?= $this->endSection('content') ?>