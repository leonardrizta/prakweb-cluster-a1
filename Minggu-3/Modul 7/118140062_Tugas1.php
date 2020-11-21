<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tugas 1 Modul 7 Minggu 3 Praktikum Pemrograman Web - PHP - 118140062 - Leonard Rizta Anugerah Perdana</title>
    <?php
        $connect = new mysqli('localhost', 'root', '', 'praktikum');
        $jurusan = $connect->query("SELECT * FROM jurusan");
        $mahasiswa = $connect->query("SELECT nrp, mahasiswa.nama, alamat, jurusan.nama as jurusan FROM mahasiswa INNER JOIN jurusan ON mahasiswa.ID_Jur = jurusan.ID_Jur");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['Tambah'])){
                $nrp = $_POST['nrp'];
                $nama = $_POST["nama"];
                $alamat = $_POST["alamat"];
                $jurusan = $_POST["jurusan"];
                $connect->query("INSERT INTO mahasiswa VALUES ('$nrp', '$nama', '$alamat', '$jurusan')");
                echo "<meta http-equiv='refresh' content='0'>";
            }
            else if(isset($_POST['Cari'])){
                $cari = $_POST["cari"];
                $mahasiswa = $connect->query("SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%'");
            }
            else if(isset($_POST['Delete'])){
                $hapus = $_POST["delete"];
                $connect->query("DELETE FROM mahasiswa WHERE NRP = '$hapus'");
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }
    ?>
</head>
<body>
    <div class="ml-4 mt-2 mb-4 mr-4">
        <div class="datamahasiswa">
            <h2>Data Mahasiswa</h2>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($value = $mahasiswa->fetch_row()){?>
                        <tr>
                            <td><?= $value[0] ?></td>
                            <td><?= $value[1] ?></td>
                            <td><?= $value[2] ?></td>
                            <td><?= $value[3] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="tambahdata">
            <h2>Tambah Data Mahasiswa</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nrp">NRP :</label>
                    <input name="nrp" id="nrp" type="number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input name="nama" id="nama" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input name="alamat" id="alamat" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jurusan">Id Jurusan :</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                        <?php while($data = mysqli_fetch_row($jurusan)){?>
                            <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
                        <?php }?>
                    </select>
                </div>
                <input type="submit" name="Tambah" value="Tambah Data" class="btn btn-primary mb-2"/>
            </form>
        </div>

        <div class="caridata">
            <h2 class="mt-3">Cari Data Mahasiswa</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="cari">Nama :</label>
                    <input name="cari" id="cari" type="text" class="form-control" required>
                </div>
                <input type="submit" name="Cari" value="Cari Data" class="btn btn-primary mb-2"/>
            </form>
        </div>

        <div class="hapusdata">
            <h2 class="mt-3">Hapus Data Mahasiswa</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="delete">NRP :</label>
                    <input name="delete" id="delete" type="text" class="form-control" required>
                </div>
                <input type="submit" name="Delete" value="Hapus Data" class="btn btn-danger mb-2"/>
            </form>
        </div>
    </div>
</body>
</html>