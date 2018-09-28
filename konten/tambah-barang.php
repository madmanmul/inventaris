<?php
if (isset($_POST['tambah'])) {
  $nama_barang = $_POST['nama_barang'];
  $no_barang = $_POST['no_barang'];
  $jenis_barang = $_POST['jenis_barang'];
  $barcode = $_POST['barcode'];
  $hargabeli_brg = $_POST['hargabeli_brg'];
  $kuantitas = $_POST['kuantitas'];
  $brg_AddedBy = $_SESSION['username'];
  $brg_EntryDate = date("Y-m-d");
  $tgl_beli = $_POST['tgl_beli'];
  $keterangan = $_POST['keterangan'];


  mysql_query("INSERT INTO barang VALUES(
    '', '$no_barang', '$barcode', '$nama_barang', '$jenis_barang', '$hargabeli_brg',
    $kuantitas, '$brg_AddedBy', '$brg_EntryDate', '$tgl_beli', '$keterangan'
    )");
  $pesan = "<div class='alert alert-success'>Data telah tersimpan! ☺</div>";
}
?>

  <section>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-5">
          <div class="card">
            <div class="card-header bg-primary text-center">
              <h1 class="h4 mb-3 font-weight-normal text-light">Tambah Barang</h1>
            </div>

            <div class="card-body">
            <?php print $pesan ?>
            <div class="alert alert-info">
              <strong>Semua form harus diisi.</strong>
            </div>
              <form action="" method="post">
                <div class="form-group">
                  <label><h5>Nama Barang</h5></label>
                  <input type="text" name="nama_barang" class="form-control" placeholder="Merk barang, contoh: Macbook Air" autofocus required>
                </div>
                 <div class="form-group">
                  <label><h5>Jenis Barang</h5></label>
                  <input type="text" name="jenis_barang" class="form-control" placeholder="Jenis barang, contoh: Laptop" required>
                </div>
				<div class="form-group">
                  <label><h5>No. Barang</h5></label>
                  <input type="text" name="no_barang" class="form-control" placeholder="No. barang atau no. kode" required>
                </div>
                 <div class="form-group">
                  <label><h5><i>Barcode</i></h5></label>
                  <input type="text" name="barcode" class="form-control" placeholder="||||||||" required>
                </div>
                 <div class="form-group">
                  <label><h5>Harga Beli</h5></label>
                  <input type="text" name="hargabeli_brg" class="form-control" placeholder="Sabarahaan?" required>
                </div>
                 <div class="form-group">
                  <label><h5>Banyak Barang</h5></label>
                  <input type="number" name="kuantitas" min="1" class="form-control" required>
                </div>
                <div class="form-group">
                  <label><h5>Tanggal Beli</h5></label>
                  <input type="date" name="tgl_beli" class="form-control" required>
                </div>
                <div class="form-group">
                  <label><h5>Keterangan</h5></label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Deskripsi barang atau lain -lain..." required>
                </div>
                <div class="form-group">
                  <button name="tambah" type="submit" class="btn btn-lg btn-twice text-center">TAMBAH</button>
                  <a href="?menu=barang" class="btn btn-lg btn-outline-twice justify-content-end">Kembali</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
