<!DOCTYPE html>
<html>
<head>
	<title>Input Data Pegawai</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
        error_reporting();
        include 'koneksi.php';
    ?>
	<h1>Input Data Pegawai</h1>
	<form action="prosesInputPegawai.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <fieldset>
        <legend>Data Pegawai</legend>
            <table>
            <tr>
            <td>	<label for="id_pegawai">ID Pegawai</label></td>
            <td>:</td>
            <td>	<input type="text" id="id_pegawai" name="id_pegawai" required></td>
        </tr>
            <tr>
            <td>		<label for="nama">Nama:</label></td>
            <td>:</td>
            <td>	<input type="text" id="nama" name="nama" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl_lahir"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="Laki-laki">Laki-Laki<br></td>
            <td><input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="checkbox" name="agama[]" id="islam" value="islam">islam<br>
            <input type="checkbox" name="agama[]" id="kristen" value="kristen">kristen<br>
            <input type="checkbox" name="agama[]" id="hindu" value="hindu">hindu<br>
            Lainnya <input name="agama[]" type="text" id="agama" size="50">
            </td>
        </tr>
            
            <tr>
            <td>	<label for="perusahaan">Perusahaan</label></td>
            <td>:</td>
            <td>	<input type="text" id="perusahaan" name="perusahaan" required></td>
        </tr>
            <tr>
            <td>	<label for="posisi">Posisi</label></td>
            <td>:</td>
            <td><select name="posisi" id="posisi">
                <option value="">---Pilih Posisi---</option>
                <option value="Perlengkapan">Perlengkapan</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Marketing">Marketing</option>
                <option value="Manager">Manager</option>
                <option value="TI">TI</option>
                <option value="Konsultan">Konsultan</option>
            </select></td>
        </tr>
            
            <tr>
            <td>	<label for="foto">Foto</label></td>
            <td>:</td>
            <td>	<input type="file" id="foto" name="foto" required></td>
        </tr>
            
            <tr>
            <td></td>
            <td></td>
            <td>	<input type="submit" id="simpan" name="simpan" value="Simpan"required></td>
        </tr>

            </table>
        </fieldset>
</form>

</body>
</html>