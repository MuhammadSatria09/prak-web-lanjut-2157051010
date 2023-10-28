<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="cont">

<div class="container3">
  <div class="table_user">
    <h3>
      <center>
      Tabel User
      </center></h3>
    <table>
      <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>NPM</td>
          <td>Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
              <a href="<?= base_url('user/'.$user['id'])?>">Detail</a>
              <a href="<?= base_url('user/'.$user['id'].'/edit')?>">Edit</a>
              <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit">Delete</button>
                    </form>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
    <a href="<?= base_url('user/create')?>" class="Tambah">Tambah Data</a>
  </div>
</div>
</div>
<?= $this->endSection('content') ?>