<?php
include_once ("koneksi.php");

function query_view($query_view) {
    global $kon;
    $result = mysqli_query($kon, $query_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id_mhs){
    global $kon;
    mysqli_query($kon, "DELETE FROM pendaftaran WHERE id_pendaftaran = $id_mhs");

    return mysqli_affected_rows($kon);
}

function update($data_mhs) {
    global $kon;
    //ambil elemen data
    $id_mahasiswa = $data_mhs["id"];
    $nama = $data_mhs["nama"];
    $nik = $data_mhs["nik"];
    $tempat_lahir = $data_mhs["tempat_lahir"];
    $tanggal_lahir = $data_mhs["tanggal_lahir"];
    $jns_kelamin = $data_mhs["jns_kelamin"];
    $kewarganegaraan = $data_mhs["kewarganegaraan"];
    $agama = $data_mhs["agama"];
    $nama_ibu = $data_mhs["nama_ibu"];
    $email = $data_mhs["email"];
    $no_telp = $data_mhs["no_telp"];
    $alamat = $data_mhs["alamat"];
    $kode_pos = $data_mhs["kode_pos"];
    $provinsi = $data_mhs["provinsi"];
    $kabupaten = $data_mhs["kabupaten"];
    $kecamatan = $data_mhs["kecamatan"];
    $pendidikan = $data_mhs["pendidikan"];
    $sekolah = $data_mhs["sekolah"];
    $nilai_raport = $data_mhs["nilai_raport"];
    $prog1 = $data_mhs["prog1"];
    $prog2 = $data_mhs["prog2"];

    //query
    $query = "UPDATE pendaftaran SET
                nama = '$nama',
                nik = '$nik',
                tempat_lahir = '$tempat_lahir',
                tanggal_lahir = '$tanggal_lahir',
                jns_kelamin = '$jns_kelamin',
                kewarganegaraan = '$kewarganegaraan',
                agama = '$agama',
                nama_ibu = '$nama_ibu',
                email = '$email',
                no_telp = '$no_telp',
                alamat = '$alamat',
                kode_pos = '$kode_pos',
                provinsi = '$provinsi',
                kabupaten = '$kabupaten',
                kecamatan = '$kecamatan',
                pendidikan = '$pendidikan',
                sekolah = '$sekolah',
                nilai_raport = '$nilai_raport',
                prog1 = '$prog1',
                prog2 = '$prog2'
            WHERE id_pendaftaran = $id_mahasiswa
            ";
    mysqli_query($kon, $query);  
    //var_dump($query);

    return mysqli_affected_rows($kon);
}

?>