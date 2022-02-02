<?php
include "koneksi.php";
if (isset($_POST['provinsi'])) {
    $provinsi = $_POST["provinsi"];

    $sql = "select * from kabupaten where id_prov=$provinsi";
    $hasil = mysqli_query($kon, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <option value="<?php echo  $data['id_kab']; ?>"><?php echo ucwords($data['nama']); ?></option>
        <?php
    }
}
if (isset($_POST['kabupaten'])) {
    $id_kabupaten = $_POST["kabupaten"];

    $sql = "select * from kecamatan where id_kab=$id_kabupaten";
    $hasil = mysqli_query($kon, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <option value="<?php echo  $data['id_kec']; ?>"><?php echo ucwords($data['nama']); ?></option>
        <?php
    }
}

?>