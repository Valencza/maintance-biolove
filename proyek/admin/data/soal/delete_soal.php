<?php
// Include your database connection file, for example, "koneksi.php"
include "../../koneksi.php";

if (isset($_GET['id_soal']) && is_numeric($_GET['id_soal'])) {
    // Get the 'id_soal' value from the query string
    $id_soal = $_GET['id_soal'];

    // Create a SQL query to delete the record with the specified 'id_soal'
    $query = "DELETE FROM tbl_soal WHERE id_soal = $id_soal";

    // Execute the SQL query
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Deletion was successful
        header("Location: tables_soal.php"); // Redirect back to the table page or any other page you prefer
        exit();
    } else {
        // Deletion failed
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // 'id_soal' parameter is missing or invalid
    echo "Invalid request.";
}
?>
