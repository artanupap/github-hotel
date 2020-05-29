<?php 
    if (isset($_POST['submit'])){
        echo '<script> alert("แก้ไขข้อมูลสำเร็จแล้ว") </script>';
        header('Refresh:0; url= index.php');
    }
?>