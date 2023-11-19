<?php

include '../../koneksi.php';
$id_mapel = $_GET ['id_mapel'];
$query = "DELETE FROM tbl_mapel WHERE id_mapel = '$id_mapel'";
$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
        
?>
    
<script language="javascript">document.location.href="tables_mapel.php";</script>
    
<?php
    
} else{
    echo "gagal hapus data";
}

?>
