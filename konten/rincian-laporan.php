<?php
include("../koneksi.php");

$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];

$q= mysql_query("SELECT * FROM barang
                 WHERE date(tgl_beli) BETWEEN '$tgl_awal' AND '$tgl_akhir' ");

 ?>

 <table border="1" width="100%">
   <thead>
     <th>No.</th>
     <th>Nama Barang</th>
     <th>Jenis Barang</th>
     <th><i>Barcode</i></th>
     <th>Kuantitas</th>
     <th>Harga Beli</th>
     <th>Ditambahkan oleh</th>
     <th>Tanggal Beli</th>
     <th>Keterangan</th>
   </thead>

   <tbody>
     <?php
     $i = 1;
     while ($r = mysql_fetch_array($q)) { ?>
       <td><?php print $i; ?></td>
       <td><?php print($r['nama_barang']); ?></td>
       <td><?php print($r['jenis_barang']); ?></td>
       <td><?php print($r['barcode']); ?></td>
       <td><?php print($r['kuantitas']); ?></td>
       <td class="text-left">Rp. <?php print number_format($r['hargabeli_brg'], 0, ".", "."); ?></td>
       <td><?php print($r['brg_AddedBy']); ?></td>
       <td><?php print date('d F Y' , strtotime($r['tgl_beli'])); ?></td>
       <td><?php print($r['keterangan']); ?></td>
   </tbody>
 <?php $i++; } ?>
 </table>
