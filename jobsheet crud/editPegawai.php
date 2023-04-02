<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA PEGAWAI PT.JAYA ABADI</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
    error_reporting();
    include 'koneksi.php';
    if(isset($_GET['id'])){
        // Mendapatkan id pegawai dari URL
    $id = $_GET['id'];
    
    // Mengeksekusi query untuk mendapatkan data pegawai berdasarkan id
    $result = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id'");
    while($row = mysqli_fetch_array($result)){
        $id_pegawai = $row['id_pegawai'];
        $nama = $row['nama'];
        $tgl_lahir = $row['tgl_lahir'];
        $jk = $row['jk'];
        $agama = $row['agama'];
        $posisi = $row['posisi'];
        $perusahaan = $row['perusahaan'];
        $foto = $row['foto'];
    }
    } else{
        header("Location: index.php");
    }
?>
	<h1>EDIT DATA PEGAWAI PT.JAYA ABADI</h1>
	<form action="prosesEditPegawai.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <fieldset>
        <legend>DATA PEGAWAI</legend>
            <table>
            <tr>
            <td>	<label for="id_pegawai">ID Pegawai</label></td>
            <td>:</td>
            <td>	<input type="text" id="id_pegawai" name="id_pegawai" readonly value="<?php echo $id_pegawai;?>"></td>
        </tr>
            <tr>
            <td>		<label for="nama">Nama:</label></td>
            <td>:</td>
            <td>	<input type="text" id="nama" name="nama" required value="<?php echo $nama;?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl_lahir" value="
            <?php echo $tgl_lahir;?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="Laki-Laki"  <?php if ($jk=='Laki-Laki') echo 'checked'?>>Laki-Laki<br></td>
            <td><input type="radio" name="jk" value="Perempuan"  <?php if ($jk=='Perempuan') echo 'checked'?>>Perempuan<br></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="checkbox" name="agama[]" id="islam" value="islam"  <?php if ($agama=='islam') echo 'checked'?>>islam<br>
                <input type="checkbox" name="agama[]" id="kristen" value="kristen"  <?php if ($agama=='kristen') echo 'checked'?>>kristen<br>
                <input type="checkbox" name="agama[]" id="hindu" value="hindu"  <?php if ($agama=='hindu') echo 'checked'?>>hindu<br>
            </td>
        </tr>
            
            <tr>
            <td>	<label for="perusahaan">Perusahaan</label></td>
            <td>:</td>
            <td>	<input type="text" id="perusahaan" name="perusahaan" required value="<?php echo $perusahaan;?>"></td>
        </tr>
            <tr>
            <td>	<label for="posisi">Posisi</label></td>
            <td>:</td>
            <td><select name="posisi" id="posisi">
                <option value="">---Pilih Posisi---</option>
                <option value="Perlengkapan" <?php if ($posisi=='Perlengkapan') echo 'selected="selected"';?>>Perlengkapan</option>
                <option value="Keuangan" <?php if ($posisi=='Keuangan') echo 'selected="selected"';?>>Keuangan</option>
                <option value="Marketing" <?php if ($posisi=='Marketing') echo 'selected="selected"';?>>Marketing</option>
                <option value="Manager" <?php if ($posisi=='Manager') echo 'selected="selected"';?>>Manager</option>
                <option value="IT" <?php if ($posisi=='IT') echo 'selected="selected"';?>>IT</option>
                <option value="Konsultan" <?php if ($posisi=='Konsultan') echo 'selected="selected"';?>>Konsultan</option>
            </select></td>
        </tr>
            
            <tr>
            <td>	<label for="foto">Foto</label></td>
            <td>:</td>
            <td>	<input type="file" id="foto" name="foto"  value="<?php echo $foto;?>"></td>
        </tr>
            
            <tr>
            <td></td>
            <td></td>
            <td>	<input type="submit" id="edit" name="edit" value="Edit"required></td>
        </tr>

            </table>
        </fieldset>
</form>

</body>
</html>