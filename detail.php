<?php
//require "koneksi.php";
include_once ("function.php");
//ambil data url
$id = $_GET["id"];

$data_mahasiswa = query_view("SELECT pendaftaran.id_pendaftaran, pendaftaran.nama, pendaftaran.nik, pendaftaran.tempat_lahir, pendaftaran.tanggal_lahir, pendaftaran.jns_kelamin, pendaftaran.kewarganegaraan, pendaftaran.agama, pendaftaran.nama_ibu, pendaftaran.email, pendaftaran.no_telp, pendaftaran.alamat, pendaftaran.kode_pos, pendaftaran.provinsi, provinsi.nama AS nama_prov , pendaftaran.kabupaten, kabupaten.nama AS nama_kab, pendaftaran.kecamatan, kecamatan.nama AS nama_kec, pendaftaran.pendidikan, pendaftaran.sekolah, pendaftaran.nilai_raport, pendaftaran.prog1, pendaftaran.prog2 FROM pendaftaran JOIN provinsi ON pendaftaran.provinsi=provinsi.id_prov JOIN kabupaten ON pendaftaran.kabupaten=kabupaten.id_kab JOIN kecamatan ON pendaftaran.kecamatan=kecamatan.id_kec WHERE id_pendaftaran = $id")[0];
?>



<div class="my-3 p-3 bg-white rounded box-shadow">
        <h1 class="text-center">Detail Mahasiswa</h1>
        <div class="media text-muted pt-3">

          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Nama</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nama"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">
          
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">NIK</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nik"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Tempat Lahir</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["tempat_lahir"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Tanggal Lahir</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["tanggal_lahir"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Jenis Kelamin</strong>
              <a href="#">Follow</a>
            </div>         
            <span class="d-block"><?php if($data_mahasiswa["jns_kelamin"] == 1){
                                                      echo "Laki-Laki";} else { echo "Perempuan";} ;?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Kewarganegaraan</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["kewarganegaraan"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Agama</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["agama"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Nama Ibu</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nama_ibu"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Email</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["email"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">No Telp</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["no_telp"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Alamat</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["alamat"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Kode Pos</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["kode_pos"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Provinsi</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nama_prov"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Kabupaten</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nama_kab"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Kecamatan</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nama_kec"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Pendidikan</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["pendidikan"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Sekolah</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["sekolah"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Nilai Raport</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["nilai_raport"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">

        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Program Pilihan 1</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["prog1"];?></span>
          </div>
        </div>
        <div class="media text-muted pt-3">  
         
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Program Pilihan 2</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block"><?php echo $data_mahasiswa["prog2"];?></span>
          </div>
        </div>
        <small class="d-block text-right mt-3">
          <a href="index.php?page=edit_mhs&id=<?php echo $data_mahasiswa["id_pendaftaran"];?>" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-cog"></span> Ubah Data</a>
          <a href="index.php?page=data_mhs" class="btn btn-success btn-sm">Kembali</a>
        </small>
      </div>

