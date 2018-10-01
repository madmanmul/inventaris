<?php
if ($_GET['hapus'] == 'ya') {
  $id_kategori = $_GET['id_kategori'];
  mysql_query("DELETE FROM kategori
               WHERE id_kategori = $id_kategori");
  $pesan = "<div class='alert alert-success text-twice'>Data berhasil dihapus!</div>";
}
 ?>

<section>
    <div class="container-fluid justify-content-center">
      <div class="row">
        <div class="col-lg-8 text-center">
          <div class="card">
            <div class="card-header bg-primary">
              <h1 class="h4 mb-3 font-weight-normal text-light">Daftar Kategori Barang</h1>
            </div>
            <!-- BODY -->
            <div class="card-body">
              <?php print $pesan; ?>
              <div class="table-responsive">
                <table class="table bg-primary text-light">
                  <caption>Semua kategori ada disini.</caption>
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Jenis Barang</th>
                      <th>Dibuat oleh</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $ambil = mysql_query("SELECT * FROM kategori");
                    $jumlah = mysql_num_rows($ambil);

                    if ($jumlah > 0) {
                      $no = 1;
                      while ($b = mysql_fetch_array($ambil)) {
                    ?>
                    <tr>
                      <td><?php print ($no); ?></td>
                      <td><?php print ($b['jenis_barang']); ?></td>
                      <td><?php print ($b['kat_AddedBy']); ?></td>
                      <td>
                        <a href="?menu=edit-kategori&id_kategori=<?php print $b['id_kategori']?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#id_kategori_<?php print $b['id_kategori']?>">HAPUS</a>
                        <div class="modal fade" id="id_kategori_<?php print $b['id_kategori']?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Kepala modal -->
                              <div class="modal-header">
                                <h4 class="modal-title text-danger text-center">Hapus</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Body Modal -->
                              <div class="modal-body">
                                <p class="text-danger">Apakah Anda yakin akan menghapus data?</p>
                              </div>
                              <!-- Kaki Modal -->
                              <div class="modal-footer">
                                <a type="button" href="?menu=kategori&hapus=ya&id_kategori=<?php print $b['id_kategori']?>" class="btn btn-danger">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
            <?php
                $no++;  }
                } else {
            ?>
                  <tr>
                    <td class="alert alert-warning" colspan="4">Data masih kosong.</td>
                  </tr>
            <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

<?php
if (isset($_POST['tambah'])) {
  $jenis_barang = $_POST['jenis_barang'];
  $katAddedBy = $_SESSION['username'];
  $katEntryDate = date("Y-m-d H:i:s");

  mysql_query("INSERT INTO kategori VALUES(
    '', '$jenis_barang', '$katAddedBy', '$katEntryDate'
  )");

  $meseji = "<div class='alert alert-success'>Data berhasil ditambahkan! ☺</div>";
  echo '<meta http-equiv="refresh" content="0">';
}
 ?>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-header bg-primary">
              <h1 class="h4 mb-3 font-weight-normal text-light">Tambah Kategori Barang</h1>
            </div>

            <div class="card-body">
              <?php print $meseji; ?>
              <div class="alert alert-info">
                <strong>Semua form <abbr title="Ga harus sih. Yang harus itu nikah.">harus</abbr> diisi.</strong>
              </div>
              <form class="" method="post">
                <div class="form-group">
                  <label class="text-center">Jenis Barang</label>
                  <input type="text" name="jenis_barang" class="form-control" placeholder="Contoh: Monitor">
                </div>
                <button name="tambah" type="submit" class="btn btn-xs btn-twice text-center">TAMBAH</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
