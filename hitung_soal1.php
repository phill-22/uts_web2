<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ini.css">
    <title>Hasil Perhitungan</title>
</head>

<body>

    <?php
    if (isset($_POST['nilai'])) {
        $nim = $_POST['npm'];
        $nama = $_POST['nama'];
        $absen = $_POST['absen'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
    }

    $rata_rata = ($absen * 0.1) + ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.4);

    if ($rata_rata >= 80) {
        $predikat = 'A';
    } else if ($rata_rata >= 70) {
        $predikat = 'B';
    } else if ($rata_rata >= 60) {
        $predikat = 'C';
    } else if ($rata_rata >= 50) {
        $predikat = 'D';
    } else if ($rata_rata < 50) {
        $predikat = 'E';
    } else {
        echo 'nilai tidak ada atau melebihi kapasitas';
    }

    if ($rata_rata >= 70) {
        $status = 'Lulus';
    } else if ($rata_rata >= 60) {
        $status = 'Ujian Ulang';
    } else if ($rata_rata < 60) {
        $status = 'Tidak lulus';
    }
    ?>

    <div class="card">
        <div class="head">
            <h1>Hasil Perhitungan</h1>
        </div>

        <a href="soal_1.php">
            << Kembali</a>
                <br><br>

                <div class="head">


                    <table border="1">
                        <tr align="left">
                            <td width="40%"><b>NPM</b></td>
                            <td>
                                <?php echo $nim  ?>
                            </td>
                        </tr>
                        <tr align="left">
                            <td><b> Nama lengkap</b></td>
                            <td>
                                <?php echo $nama ?>
                            </td>

                        </tr>

                        <tr align="left">
                            <td><b> Nilai</b></td>
                            <td>
                                <ul>
                                    <li><?php echo "Absen : ", $absen ?></li>
                                    <li><?php echo "Tugas : ", $tugas ?></li>
                                    <li><?php echo "Uts : ", $uts ?></li>
                                    <li><?php echo "Uas : ", $uas ?></li>
                                </ul>
                            </td>

                        </tr>

                        <tr align="left">
                            <td><b> Nilai Rata-rata </b></td>
                            <td><?php echo $rata_rata ?></td>

                        </tr>

                        <tr align="left">
                            <td><b> Predikat </b></td>
                            <td> <?php echo $predikat ?></td>

                        </tr>

                        <tr align="left">
                            <td><b> Status</b></td>
                            <td><?php echo $status ?></td>

                        </tr>
                    </table>

                    <h3>Keterangan : </h3>

                    <table border="1">
                        <tr>
                            <td>Presentase Nilai Rata-rata : </td>
                            <td>Keterangan Predikat : </td>
                            <td>Keterangan Status : </td>
                        </tr>
                        <tr>
                            <td>
                                <ul style="padding-top: 12px">
                                    <li>Nilai Absen : 10% </li>
                                    <li>Nilai Tugas : 20%</li>
                                    <li>Nilai UTS : 30%</li>
                                    <li>Nilai UAS : 40%</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>>= 80 : A</li>
                                    <li>>= 70 : B</li>
                                    <li>>= 60 : C</li>
                                    <li>>= 50 : D</li>
                                    <li>
                                        < 50 : E</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>>= 70 : LULUS</li>
                                    <li>>= 60 : UJIAN ULANG</li>
                                    <li>
                                        < 60 : TIDAK LULUS </li>
                                </ul>
                            </td>
                        </tr>
                    </table>

                </div>




    </div>

</body>

</html>