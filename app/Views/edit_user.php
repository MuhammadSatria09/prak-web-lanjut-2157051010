<?= $this->extend('layouts/app')?>

    <?= $this->section('content')?>

    <div class="create">
    <form action="<?= base_url('/user/'.$user['id']) ?>" method="post" enctype= "multipart/form-data">
    <input type="hidden" name="_method" value="PUT">    
    <table>
              
        <tr>
            <td>
                Nama : <input type="text" name="nama" value = <?= $user['nama']?> >
                <?php if (session('validation')) : ?>
                    <?php echo (session('validation')->getError('nama')) ?>
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <td>
                NPM : <input type="text" name="npm" value = <?= $user['npm']?>>
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
                            <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
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
                <img style="border-radius: 50%; 
    width: 250px; 
    height:250px;
    display: block;
    margin: auto;" src="<?= $user['foto'] ?? base_url('assets/img/sigma.jpg') ?>" alt="">
            </td>
        </tr>
        <tr>
            <td>
                Foto :
                <input type="file" name="foto" id="foto">        
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

<?= $this->endSection()?>