<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_tamu.xls");
?>

<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Nama Tamu</th>
    <th>Pihak yang dituju</th>
    <th>Tanggal Kunjungan</th>
    <th>Nomor Identitas</th>
    <th>Alamat Tamu</th>
    <th>Keperluan Tamu</th>
  </tr>


  <?php $no = 1; ?>

  <?php foreach ($tamu as $key => $value) : ?>
    <tr>;
      <td> <?= $no++; ?> </td>;
      <td> <?= $value['nama_tamu'] ?></td>;
      <td> <?= $value['nama_penemu'] ?> </td>;
      <td> <?= $value['tanggal_kunjungan_tamu'] ?> </td>;
      <td> <?= $value['nomor_identitas_tamu'] ?> </td>;
      <td> <?= $value['alamat_tamu'] ?> </td>;
      <td> <?= $value['keperluan_tamu']  ?> </td>;
    </tr>;
  <?php endforeach; ?>
</table>