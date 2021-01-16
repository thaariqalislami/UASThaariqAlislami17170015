<?php
$nama=$_POST["nama_pemesan"];
$jumlahtiket=$_POST["jumlah_tiket"];
$kelas=$_POST["kelas"];
$tujuan=$_POST["tujuan"];
$bagasi=$_POST["bagasi"];
$asuransi=$_POST["asuransi"];


if($jumlahtiket>=3){
    $diskon=20%;
}

if($kelas=="Ekonomi"){
    $harga=1000000;
}elseif($kelas=="Bisnis"){
    $harga=2000000;
}elseif($eksekutif=="Eksekutif"){
    $harga=3000000;
}

if($bagasi=="5kg"){
    $harga=100000;
}elseif($bagasi=="10kg"){
    $harga=150000;
}elseif($bagasi=="15kg"){
    $harga=200000;
}

if($asuransi=="Asuransi Jiwa"){
    $harga=50000;
}elseif($asuransi=="Asuransi Kecelakaan"){
    a$harga=50000;
}elseif($asuransi=="Asuransi Keselamatan"){
    $harga=50000;
}
$totalharga=$harga*$jumlahtiket=$diskon+$bagasi+$asuransi

?>

<table border="1">
<tr>
  <th>Nama Pemesan</th>
  <th>:</th>
  <th><?php echo $nama;?></th>
</tr>
<tr>
<td>Jumlah Tiket</td><td></td><td><?php echo $jumlahtiket;?></td>
</tr>
<tr>
<td>Kelas</td><td></td><td><?php echo $kelas;?></td>
</tr>
<tr>
<td>Tujuan</td><td></td><td><?php echo $tujuan;?></td>
</tr>
<tr>
<td>Bagasi</td><td></td><td><?php echo $bagasi;?></td>
</tr>
<td>Asuransi</td><td></td><td><?php echo $asuransi;?></td>
</tr>
<tr>
<td>Total Harga</td><td></td><td><?php echo $totalharga;?></td>
</tr>
</table>