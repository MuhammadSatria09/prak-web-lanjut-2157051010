<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="cont">

    <div class="create">
    <form action="<?= base_url('/user/store') ?>" method="post" enctype= "multipart/form-data">
        <table>
              
        <tr>
            <td>
                Nama : <input type="text" name="nama" value = <?= old('nama');?> >
                <?php if (session('validation')) : ?>
                    <?php echo (session('validation')->getError('nama')) ?>
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <td>
                NPM : <input type="text" name="npm" value = <?= old('npm');?>>
                <?php if (session('validation')) : ?>
                    <?php echo (session('validation')->getError('npm')) ?>
                <?php endif ?>
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
            <td>
                Foto :
                <input type="file" name="foto" id="foto">        
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