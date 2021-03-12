<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>NAMAA</th><th>MATA kuliah</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;

echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nama_siswa = $_POST['nama'].'</td>';
echo '<td>'.$mata_kuliah = $_POST['matkul'].'</td>';
echo '<td>'.$nilai_uts = $_POST['nilai_uts'].'</td>';
echo '<td>'.$nilai_uas = $_POST['nilai_uas'].'</td>';
echo '<td>'.$nilai_tugas = $_POST['nilai_tugas'].'</td>';
$nilai_akhir = (30 * $nilai_uts / 100) + (35 * $nilai_uas / 100) + (35 * $nilai_tugas / 100);
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
?>
</tbody>
</table> 