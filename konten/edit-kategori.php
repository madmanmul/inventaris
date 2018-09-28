<?php
if (isset($_POST['tambah'])) {
  $jenis_barang = $_POST['jenis_barang'];
  $kat_EditedBy = $_SESSION['username'];
  $katEntryDate = date("Y-m-d H:i:s");
  $id_kategori = $_POST['id_kategori'];

  mysql_query("UPDATE kategori SET
               jenis_barang = '$jenis_barang', kat_EditedBy = '$kat_EditedBy', kat_EntryDate ='$katEntryDate'
               WHERE id_kategori = $id_kategori");

  $meseji = "<div class='alert alert-success'>Data berhasil disunting! ☺</div>";
}

$id_kategori = $_GET['id_kategori'];
$k = mysql_query("SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");
$m = mysql_fetch_array($k);
 ?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-5">
      <div class="card">
        <div class="card-header text-center bg-primary">
          <h1 class="h4 mb-3 font-weight-normal text-light">Edit Kategori Barang</h1>
        </div>

        <div class="card-body">
          <?php print $meseji; ?>
          <form class="" method="post">
            <div class="form-group">
              <label class="">Jenis Barang</label>
              <input type="text" name="jenis_barang" value="<?php print $m['jenis_barang']; ?>" class="form-control"required autofocus>
            </div>
            <input type="hidden" name="id_kategori" value="<?php print $m['id_kategori']; ?>" class="form-control" placeholder="Contoh: Monitor" >
            <button name="tambah" type="submit" class="btn btn-xs btn-twice text-center">UBAH</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
