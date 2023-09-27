<?php
// Include the database configuration file
include_once 'db2.php';

// Get images from the database
$query = $conn->query("SELECT * FROM images where nama_produk = " . "'$namaproduk'" . "ORDER BY id DESC");

if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $imageURL = getcwd() . '/uploads/p_' . $row["file_name"];
?>
        <img src="<?php echo $imageURL; ?>" alt="" />
    <?php }
} else { ?>
    <p>No image(s) found...</p>
<?php } ?>