<!DOCTYPE html>
<html>

<head>
    <title>DAFTAR PEKERJA PT.JAYA ABADI</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <?php
        error_reporting();
        include 'koneksi.php';
    ?>

    <h1 style="text-align:center;">DATA PEGAWAI PT.JAYA ABADI</h1>

    <table border='1' style="margin:auto;">
        <thead><tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Posisi</th>
            <th>Perusahaan</th>
            <th>Foto</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
        
        <?php
        $no=0;
        $result = mysqli_query($koneksi, "SELECT * FROM pegawai ORDER BY id_pegawai ASC;");
        while ($row = mysqli_fetch_array($result)) {
                $no++;
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['id_pegawai'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['tgl_lahir'] . "</td>";
                echo "<td>" . $row['jk'] . "</td>";
                echo "<td>" . $row['agama'] . "</td>";
                echo "<td>" . $row['posisi'] . "</td>";
                echo "<td>" . $row['perusahaan'] . "</td>";
                echo "<td> 
                <center><img src='foto/" . $row['foto'] . "' alt='Foto' width='70px' height='70px'>
                </center>
                </td>";
                echo "<td><a href='editPegawai.php?id=" . $row['id_pegawai'] . "'>Edit</a></td>";
                echo "<td><a href='hapusPegawai.php?id=" . $row['id_pegawai'] . "'>Hapus</a></td>";
                echo "</tr>";

                
                
            }

        mysqli_close($koneksi);
        ?>
    </table>

    <br>
    <center><a href="inputPegawai.php">TAMBAHKAN DATA</a>

</center>
</body>

</html>
