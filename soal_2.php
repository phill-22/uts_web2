<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ini.css">
    <title>soal 2 uts</title>
</head>

<body>
    <div class="card">
        <div class="head">
            <h1> Hasil Perhitungan</h1>
            <br><br>
        </div>
        <a href="index.php">
            << Kembali</a>
                <br><br>
                <form action="hitung_soal2.php" method="post">
                    <table border="1">
                        <tr>
                            <td width="40%"><label for="nama"><b>Nama Barang</b></label></td>
                            <td><input type="text" name="nama" id="nama" required placeholder="masukan nama barang"></td>
                        </tr>
                        <tr>
                            <td><label for="harga"><b>Harga</b></label></td>
                            <td><input type="text" name="harga" id="harga" required placeholder="0"></td>
                        </tr>
                        <tr>
                            <td><label for="nama"><b>Jumlah Beli</b></label></td>
                            <td><input type="text" name="jumlah" id="jumlah" required placeholder="0"></td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2">
                                <input type="submit" value="hitung" name="nilai">
                                <input type="reset" value="reset">
                            </td>
                        </tr>

                    </table>
                </form>


    </div>


</body>

</html>