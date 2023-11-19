<?php

include '../../koneksi.php';
$id_kelas = $_GET ['id_kelas'];
$query = "DELETE FROM tbl_kelas WHERE id_kelas = '$id_kelas'";
$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
        
?>
    
<script language="javascript">document.location.href="tables_kelas.php";</script>
    
<?php
    
} else{
    echo "gagal hapus data";
}

?>
