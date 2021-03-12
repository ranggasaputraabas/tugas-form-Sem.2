<h3>form</h3>
<form action="array_siswa.php" method="post">
<table>
    <tr>
        <td width="130">Nama siswa</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Mata kuliah</td>
        <td><select name="matkul">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data I</option>
            <option value="WEB1">Pemrograman Web</option>
        </td>
    </tr>
    <tr>
        <td>Nilai UTS</td>
        <td><input type="text" name="nilai_uts" value="" size="3"></td>
    </tr>
    </tr>
    <tr>
        <td>Nilai UAS</td>
        <td><input type="number" name="nilai_uas" value="" size="3"></td>
    </tr>
    </tr>
    <tr>
        <td>Nilai Tugas/Praktikum</td>
        <td><input type="number" name="nilai_tugas" value="" size="3"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>


