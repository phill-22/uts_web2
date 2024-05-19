<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ini.css">
    <title>soal 2 uts</title>
</head>

<body>
    <?php
    if (isset($_POST['nilai'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
    }
    $sub_total = $harga * $jumlah;

    if ($sub_total > 2_000_000) {
        $diskon = $sub_total * 0.12;
    } else if ($sub_total > 1_000_000) {
        $diskon = $sub_total * 0.08;
    } else {
        $diskon = 0;
    }

    $total = $sub_total - $diskon;
    ?>
    <div class="card">
        <div class="head">
            <h1>Hasil Perhitugan</h1>
        </div>

        <a href="soal_2.php">
            << Kembali</a>
                <br><br>
                <table border="1">
                    <tr>
                        <td colspan="2">
                            <ul>
                                <li><?php echo 'Nama Barang : ', $nama ?></li>
                                <li><?php echo 'Harga Barang : ', $harga ?></li>
                                <li><?php echo 'Jumlah Barang : ', $jumlah ?></li>
                                <li><?php echo 'Sub Total : ', $sub_total ?></li>

                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td width="60%">Diskon</td>
                        <td>
                            <?php echo $diskon ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Total</td>
                        <td>
                            <?php echo $total ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h3>Keterangan Diskon</h3>
                            <ul>
                                <li> Pembelian lebih dari 1.000.00 Mendapat diskon sebesar 8%</li>
                                <li> Pembelian lebih dari 2.000.00 Mendapat diskon sebesar 12%</li>
                            </ul>
                        </td>
                    </tr>
                </table>
    </div>


</body>

</html>