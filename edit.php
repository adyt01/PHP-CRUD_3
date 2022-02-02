<?php
include_once ("function.php");
//ambil data url
$id = $_GET["id"];

//data mhs berdasarkan ID
$data_mahasiswa = query_view("SELECT * FROM pendaftaran WHERE id_pendaftaran = $id")[0];

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    
    //cek berhasil / tidak update data
    if(update($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL diupdate');
                document.location.href = 'index.php?page=data_mhs';
            </script>
        ";
    } else{
        //var_dump($_POST);
        echo "
            <script>
                alert('data GAGAL diupdate');
                document.location.href = 'index.php?page=data_mhs';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Edit Mahasiswa Baru</h1>

        <form action="index.php?page=edit_mhs&id=<?php echo $id; ?>" method="post">
            <div class="alert bg-dark text-white">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <input type="hidden" name="id" value="<?php echo $data_mahasiswa["id_pendaftaran"];?>">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data_mahasiswa["nama"];?>">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" id="nik" name="nik" class="form-control" value="<?php echo $data_mahasiswa["nik"];?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?php echo $data_mahasiswa["tempat_lahir"];?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?php echo $data_mahasiswa["tanggal_lahir"];?>">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" id="jns_kelamin" name="jns_kelamin">                           
                            <option value="<?php echo $data_mahasiswa["jns_kelamin"];?>" selected="selected"><?php if($data_mahasiswa["jns_kelamin"] == 1) {
                                echo "Laki-Laki";}else { echo "Perempuan";}; ?></option>
                            <option value="-">---</option>                                                     
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
                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                            <option value="<?php echo $data_mahasiswa["kewarganegaraan"];?>" selected="selected"><?php echo $data_mahasiswa["kewarganegaraan"];?></option>                         
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" id="agama" name="agama">
                            <option value="<?php echo $data_mahasiswa["agama"];?>" selected="selected"><?php echo $data_mahasiswa["agama"];?></option>
                            <option value="-">---</option>
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
                        <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" value="<?php echo $data_mahasiswa["nama_ibu"];?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $data_mahasiswa["email"];?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" id="no_telp" name="no_telp" class="form-control" value="<?php echo $data_mahasiswa["no_telp"];?>">
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
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"><?php echo $data_mahasiswa["alamat"];?></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control" value="<?php echo $data_mahasiswa["kode_pos"];?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi">
                            <option value="<?php echo $data_mahasiswa["provinsi"];?>" selected="selected">Provinsi Awal</option>
                            <option value="-">---</option>
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
                            <option value="<?php echo $data_mahasiswa["kabupaten"];?>" selected="selected">Kabupaten Awal</option>
                            <option value="-">---</option>

                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option value="<?php echo $data_mahasiswa["kecamatan"];?>" selected="selected">Kecamatan Awal</option>
                            <option value="-">---</option>

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
                        <select class="form-control" name="pendidikan" id="pendidikan">
                            <option value="<?php echo $data_mahasiswa["pendidikan"];?>" selected="selected"><?php echo $data_mahasiswa["pendidikan"];?></option>
                            <option value="-">----</option>
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
                        <input type="text" name="sekolah" id="sekolah" class="form-control" value="<?php echo $data_mahasiswa["sekolah"];?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport" class="form-control"
                            value="<?php echo $data_mahasiswa["nilai_raport"];?>">
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
                        <select class="form-control" name="prog1" id="prog1">
                            <option value="<?php echo $data_mahasiswa["prog1"];?>" selected="selected"><?php echo $data_mahasiswa["prog1"];?></option>
                            <option value="-">---</option>
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
                        <select class="form-control" name="prog2" id="prog2">
                            <option value="<?php echo $data_mahasiswa["prog2"];?>" selected="selected"><?php echo $data_mahasiswa["prog2"];?></option>
                            <option value="-">---</option>
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
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Data Mahasiswa</button>
                    <a href="index.php?page=data_mhs" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>