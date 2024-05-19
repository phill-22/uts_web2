<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ini.css">
    <title>perhitungan nilai</title>
</head>

<body>
    <div class="card">
        <div class="head">
            <h1>Perhitungan Nilai</h1>
        </div>

        <a href="index.php">
            << Kembali</a>
                <br><br>

                <div class="head">
                    <form action="hitung_soal1.php" method="post">
                        <table border="1">
                            <tr align="left">
                                <td width="40%"><label for="npm"><b>NPM</b></label></td>
                                <td>
                                    <input type="text" name="npm" id="npm" placeholder="masukkan nim/npm..." required size="20px">
                                </td>
                            </tr>
                            <tr align="left">
                                <td><label for="nama"><b> Nama lengkap</b></label></td>
                                <td><input type="text" name="nama" id="nama" placeholder="masukan Nama..." required size="20px"></td>
                            </tr>

                            <tr align="left">
                                <td><label for="absen"><b> Nilai Absen </b></label></td>
                                <td><input type="number" name="absen" id="absen" placeholder="0" min="0" max="100" required style="width: 165px"></td>
                            </tr>

                            <tr align="left">
                                <td><label for="tugas"><b> Nilai Tugas </b></label> </td>
                                <td><input type="number" name="tugas" id="tugas" placeholder="0" min="0" max="100" required style="width: 165px"></td>
                            </tr>

                            <tr align="left">
                                <td><label for="uts"><b> Nilai UTS </b></label> </td>
                                <td><input type="number" name="uts" id="uts" placeholder="0" min="0" max="100" required style="width: 165px"></td>
                            </tr>

                            <tr align="left">
                                <td> <label for="uas"><b> Nilai UAs </b></label></td>
                                <td><input type="number" name="uas" id="uas" placeholder="0" min="0" max="100" required style="width: 165px"></td>
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


    </div>

</body>

</html>