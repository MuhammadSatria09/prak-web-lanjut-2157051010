<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="cont">

    <div class="create">
    <form action="<?= base_url('/kelas/store') ?>" method="post" enctype= "multipart/form-data">
        <table>
              
        <tr>
            <td>
                Nama Kelas: <input type="text" name="nama_kelas" value = <?= old('nama_kelas');?> >
                <?php if (session('validation')) : ?>
                    <?php echo (session('validation')->getError('nama_kelas')) ?>
                <?php endif ?>
            </td>
        </tr>
        
        <tr>
            <td style="display: flex;align-items: center;justify-content: center;align-content: flex-end; border: 0px;">
                <button class="btn" type="submit">submit</button>
            </td>
        </tr>

        </table>
    </form>
    </div>
</div>
<?= $this->endSection()?>