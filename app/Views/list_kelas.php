<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="cont">

<div class="container3">
  <div class="table_user">
    <h3>
      <center>
      Tabel Kelas
      </center></h3>
    <table>
      <thead>
        <tr>
          <td>No</td>
          <td>Nama Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($kelas as $kelas) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $kelas['nama_kelas'] ?></td>
            <td>
                <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>">Edit</a>
                <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="post">
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
    <a href="<?= base_url('kelas/create')?>" class="Tambah">Tambah Data</a>
  </div>
</div>
</div>
<?= $this->endSection('content') ?>