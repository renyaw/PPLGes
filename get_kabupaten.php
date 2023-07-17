<?php
require_once("db_login.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("SELECT * from kabupaten WHERE kode_prov='$id'");
?>
    <option value="0">-- Pilih Kabupaten/Kota --</option>
    <?php while ($data = $result->fetch_object()) : ?>
        <option value="<?php echo $data->kode_kab ?>"><?php echo $data->nama ?></option>
<?php endwhile;
}
