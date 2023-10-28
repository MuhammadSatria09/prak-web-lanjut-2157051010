<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="cont">

    <div class="create">
    <form action="<?= base_url('/kelas/'.$kelas['id']) ?>" method="post" enctype= "multipart/form-data">
    <input type="hidden" name="_method" value="PUT">    
    <table>
              
        <tr>
            <td>
                Nama : <input type="text" name="nama_kelas" value = <?= $kelas['nama_kelas']?> >
                <?php if (session('validation')) : ?>
                    <?php echo (session('validation')->getError('nama_kelas')) ?>
                <?php endif ?>
            </td>
        </tr>
        
        <tr>
            <td style="display: flex;align-items: center;justify-content: center;align-content: flex-end;">
                <button class="btn" type="submit">submit</button>
            </td>
        </tr>

        </table>
        
        <?= csrf_field() ?>
    </form>
    </div>
</div>
<?= $this->endSection()?>