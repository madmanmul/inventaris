<?php
if (isset($_POST['tambah'])) {
  $nama_barang = $_POST['nama_barang'];
  $jenis_barang = $_POST['jenis_barang'];
  $barcode = $_POST['barcode'];
  $hargabeli_brg = $_POST['hargabeli_brg'];
  $kuantitas = $_POST['kuantitas'];
  $brg_EditedBy = $_SESSION['username'];
  $brg_EntryDate = date("Y-m-d H:i:s");
  $tgl_beli = $_POST['tgl_beli'];
  $keterangan =$_POST['keterangan'];
  $id_barang = $_POST['id_barang'];


  mysql_query("UPDATE barang SET
               nama_barang = '$nama_barang', jenis_barang = '$jenis_barang',
               barcode = '$barcode', hargabeli_brg = '$hargabeli_brg',
               kuantitas = '$kuantitas', tgl_beli = '$tgl_beli',
               brg_EditedBy = '$brg_EditedBy', keterangan = '$keterangan'
               WHERE id_barang = $id_barang
  ");
  $pesan = "<div class='alert alert-success'>Data berhasil diubah! ☺</div>";
}

$id_barang = $_GET['id_barang'];
$k = mysql_query("SELECT * FROM barang WHERE id_barang = $id_barang");
$m = mysql_fetch_array($k);
?>


  <section>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-5">
          <div class="card">
            <div class="card-header bg-primary text-center">
              <h1 class="h4 mb-3 font-weight-normal text-light">Edit Barang</h1>
            </div>

            <div class="card-body">
            <?php print $pesan ?>
            <div class="alert alert-info">
              <strong>Semua form harus diisi.</strong>
            </div>
              <form action="" method="post">
                <div class="form-group">
                  <label><h5>Nama Barang</h5></label>
                  <input type="text" name="nama_barang" class="form-control" value="<?php print $m['nama_barang'] ?>" placeholder="Merk barang, contoh: Macbook Air" autofocus required>
                </div>
                 <div class="form-group">
                  <label><h5>Jenis Barang</h5></label>
                  <input type="text" name="jenis_barang" class="form-control" value="<?php print $m['jenis_barang'] ?>"placeholder="Jenis barang, contoh: Laptop" required>
                </div>
                 <div class="form-group">
                  <label><h5><i>Barcode</i></h5></label>
                  <input type="text" name="barcode" class="form-control" value="<?php print $m['barcode'] ?>" placeholder="||||||||" required>
                </div>
                 <div class="form-group">
                  <label><h5>Harga Beli</h5></label>
                  <input type="text" name="hargabeli_brg" class="form-control" value="<?php print $m['hargabeli_brg'] ?>" placeholder="Sabarahaan?" required>
                </div>
                 <div class="form-group">
                  <label><h5>Banyak Barang</h5></label>
                  <input type="number" name="kuantitas" value="<?php print $m['kuantitas'] ?>" class="form-control" required>
                </div>
                <div class="form-group">
                  <label><h5>Tanggal Beli</h5></label>
                  <input type="date" name="tgl_beli" value="<?php print $m['tgl_beli'] ?>" class="form-control" required>
                </div>
                <div class="form-group">
                 <label><h5>Keterangan</h5></label>
                 <input type="text" name="keterangan" class="form-control" value="<?php print $m['keterangan'] ?>" placeholder="Kondisi barang atau apapun..." required>
               </div>

                <input type="hidden" name="id_barang" value="<?php print $m['id_barang'] ?>">
                <div class="form-group">
                  <button name="tambah" type="submit" class="btn btn-lg btn-twice text-center">UBAH</button>
                  <a href="?menu=barang" class="btn btn-lg btn-outline-twice justify-content-end">Kembali</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
