<?php
include_once "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
        <a href="index.php?page=data_mhs" class="btn btn-success">Lihat Data</a>
    <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>
    <?php    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nik=input($_POST["nik"]);
        $tempat_lahir=input($_POST["tempat_lahir"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $jns_kelamin=input($_POST["jns_kelamin"]);
        $kewarganegaraan=input($_POST["kewarganegaraan"]);
        $agama=input($_POST["agama"]);
        $nama_ibu=input($_POST["nama_ibu"]);
        $email=input($_POST["email"]);
        $no_telp=input($_POST["no_telp"]);
        $alamat=input($_POST["alamat"]);
        $kode_pos=input($_POST["kode_pos"]);
        $provinsi=input($_POST["provinsi"]);
        $kabupaten=input($_POST["kabupaten"]);
        $kecamatan=input($_POST["kecamatan"]);
        $pendidikan=input($_POST["pendidikan"]);
        $sekolah=input($_POST["sekolah"]);
        $nilai_raport=input($_POST["nilai_raport"]);
        $prog1=input($_POST["prog1"]);
        $prog2=input($_POST["prog2"]);

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaran (nama,nik,tempat_lahir,tanggal_lahir,jns_kelamin,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_raport,prog1,prog2) values
		('$nama','$nik','$tempat_lahir','$tanggal_lahir',$jns_kelamin,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_raport,'$prog1','$prog2')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        }
    }
    ?>
        <form id="form" method="post">
            <div class="alert bg-dark text-white">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jns_kelamin">
                            <option>Pilih</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                    </div>
                </div>
            </div>
            <div class="alert bg-dark text-white">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi">
                            <option>Pilih Provinsi</option>
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel provinsi
                            $sql="select * from provinsi";
                            $hasil=mysqli_query($kon,$sql);
                            while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <option value="<?php echo $data['id_prov'];?>"><?php echo $data['nama'];?></option>
                            <?php
                                }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <option>Pilih Kabupaten</option>
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>

            </div>
            <script>
            $("#provinsi").change(function() {
                // variabel dari nilai combo provinsi
                var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "provinsi=" + id_provinsi,
                    success: function(data) {
                        $("#kabupaten").html(data);
                    }
                });
            });

            $("#kabupaten").change(function() {
                // variabel dari nilai combo box kabupaten
                var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "kabupaten=" + id_kabupaten,
                    success: function(data) {
                        $("#kecamatan").html(data);
                    }
                });
            });
            </script>
            <div class="alert bg-dark text-white">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan">
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK-IPA">SMK - IPA</option>
                            <option value="SMK-IPS">SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport" class="form-control"
                            placeholder="Masukan Rata-rata nilai raport">
                    </div>
                </div>
            </div>
            <div class="alert bg-dark text-white">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 1:</label>
                        <select class="form-control" name="prog1">
                            <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                            <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 2:</label>
                        <select class="form-control" name="prog2">
                            <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                            <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>