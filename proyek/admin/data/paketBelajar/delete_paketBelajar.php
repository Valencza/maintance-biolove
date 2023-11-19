<?php

include "../../koneksi.php";
$id_paketBelajar = $_GET ['id_paketBelajar'];
$query = "DELETE FROM tbl_paketBelajar WHERE id_paketBelajar = '$id_paketBelajar'";
$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
        
?>
    
<script language="javascript">document.location.href="tables.php";</script>
    
<?php
    
} else{
    echo "gagal hapus data";
}

?>
