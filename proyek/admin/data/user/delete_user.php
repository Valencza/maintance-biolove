<?php

include "../../koneksi.php";
$id_user = $_GET ['id_user'];
$query = "DELETE FROM tbl_user WHERE id_user = '$id_user'";
$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
        
?>
    
<script language="javascript">document.location.href="tables_user.php";</script>
    
<?php
    
} else{
    echo "gagal hapus data";
}

?>
