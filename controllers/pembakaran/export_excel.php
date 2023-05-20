<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=HASIL SUHU PEMBAKARAN.xls");

require('../config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
    $config['hostname'],
    $config['username'],
    $config['password'],
    $config['database']
);

// menampilkan data hasil oxymeter
$data = mysqli_query($konek, "SELECT * from suhu_pembakaran");
$no = 1;
?>

<style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;
    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
</style>

<body>
    <center>
        <h1>Data Suhu Pembakaran</h1>
    </center>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Suhu dalam Celcius</th>
            <th>Suhu dalam Fahrenheit</th>
            <th>Waktu</th>
        </tr>

        <?php while ($d = mysqli_fetch_array($data)) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['suhucel']; ?></td>
                <td><?php echo $d['suhufah']; ?></td>
                <td><?php echo $d['waktu']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>