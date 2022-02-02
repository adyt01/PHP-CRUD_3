<?php
require "koneksi.php";
//include_once "function.php";

if(function_exists("query_view") === FALSE){
    include_once "function.php";  
}

$mhsadm_view = query_view("SELECT * FROM pendaftaran");
?>


    <div class="container p-3 my-3 border">
        <a href="index.php?page=tambah_mhs" class="btn btn-primary">Tambah Mahasiswa</a>
    <h1 class="text-center">Data Mahasiswa</h1>    
        <form id="form" method="post">            
            <div class="row">
                <table class="table">
                    <thead class="alert bg-dark text-white">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($mhsadm_view as $row){
                        ?>
                        
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["nik"]; ?></td>
                            <td><?php if($row["jns_kelamin"] == 1) {
                                echo "Laki-Laki";}else { echo "Perempuan";}; ?>
                                
                            </td>
                            <td><?php echo $row["prog1"]; ?></td>
                            <td>   
                                <a href="hapus.php?id=<?php echo $row["id_pendaftaran"];?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>                            
                                <a href="index.php?page=edit_mhs&id=<?php echo $row["id_pendaftaran"];?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a>
                                <a href="index.php?page=detail_mhs&id=<?php echo $row["id_pendaftaran"];?>" type="button" class="btn btn-secondary btn-sm"><span class="glyphicon glyphicon-cog"></span> Detail</a>                               
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
