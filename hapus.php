<?php
require "koneksi.php";
// require "function.php";
function hapus($id_mhs){
    global $kon;
    mysqli_query($kon, "DELETE FROM pendaftaran WHERE id_pendaftaran = $id_mhs");

    return mysqli_affected_rows($kon);
}

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
                <script>
                    alert('data BERHASIL dihapus');
                    document.location.href = 'index.php?page=data_mhs';
                </script>
                ";
} else {
    echo "
                <script>
                    alert('data GAGAL dihapus');
                    document.location.href = 'index.php?page=data_mhs';
                </script>
                ";
}
?>