<?php
if ($_GET['hapus'] == 'ya') {
  $id_barang = $_GET['id_barang'];
  mysql_query("DELETE FROM barang
              WHERE id_barang = $id_barang");
  $pesan = "<div class='alert alert-success text-twice'>Data berhasil dihapus!</div>";
}
 ?>

<section>
    <div class="container-fluid">
      <div class="row">
        <div class="col text-center">
          <div class="card">
            <div class="card-header bg-primary">
              <h1 class="h4 mb-3 font-weight-normal text-light">Daftar Barang</h1>
              <a href="?menu=tambah-barang" class="btn btn-outline-twice justify-content-end">Tambah</a>
            </div>

            <div class="card-body">
              <?php print $pesan; ?>
              <div class="table-responsive">
                <table class="table table-hover">
                  <caption>Daftar semua barang.</caption>
                  <thead class=" bg-primary text-light">
                    <tr>
                      <th>No.</th>
                      <th>Nama Barang</th>
                      <th>Jenis Barang</th>
                      <th><i>Barcode</i></th>
                      <th>Kuantitas</th>
                      <th>Harga Beli</th>
                      <th>Tanggal Beli</th>
                      <th>Keterangan</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="text-primary">
                  <?php
                  $grab = mysql_query("SELECT * from barang");
                  $jumlah = mysql_num_rows($grab);

                  if ($jumlah > 0) {
                  while ($b = mysql_fetch_array($grab)) {
                  ?>
                    <tr>
                      <td><?php print($b['id_barang']) ?></td>
                      <td><?php print($b['nama_barang']) ?></td>
                      <td><?php print($b['jenis_barang']) ?></td>
                      <td><?php print($b['barcode']) ?></td>
                      <td><?php print($b['kuantitas']) ?></td>
                      <td class="text-left">Rp. <?php print($b['hargabeli_brg']) ?></td>
                      <td><?php print date('d F Y' , strtotime($b['tgl_beli'])) ?></td>
                      <td><?php print($b['keterangan']) ?></td>
                      <td>
                        <a href="?menu=edit-barang&id_barang=<?php print $b['id_barang']?>" class="btn btn-sm btn-warning">EDIT</a>
                      </td>
                      <td>
                        <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#id_barang_<?php print $b['id_barang']?>">HAPUS</a>
                        <div class="modal fade" id="id_barang_<?php print $b['id_barang']?>">
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
                                <a type="button" href="?menu=barang&hapus=ya&id_barang=<?php print $b['id_barang']?>" class="btn btn-danger">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php
                } // end of while
              } else { ?>
                      <tr>
                        <td colspan="9" class="alert alert-warning">Data masih kosong.</td>
                      </tr>
              <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
  </div>
  </section>
