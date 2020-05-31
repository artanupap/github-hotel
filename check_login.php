<?php
session_start();
// header("Content-type:text/html; charset=UTF-8");              
// header("Cache-Control: no-store, no-cache, must-revalidate");             
// header("Cache-Control: post-check=0, pre-check=0", false);   
// ส่วนของการเชิ่อมต่อกับฐานข้อมูล   

//  
// if($_POST['user_name']!="" && $_POST['user_pass']!=""){
//     $q="SELECT * FROM tbl_user WHERE user_name='".$_POST['user_name']."' ";
//     $q.=" AND user_pass='".$_POST['user_pass']."' LIMIT 1 ";
//     $qr=mysql_query($q);
//     if(mysql_num_rows($qr)>0){
//         $rs = mysql_fetch_array($qr);
//         // $_SESSION['ses_user']=$rs['user_id'];  // สร้างตัวแปร session ตามต้องการ
//         echo "1";  // เมื่อล็อกอินผ่าน
//     }else{
//         echo "0";   
//     }
// }else{
//     echo "0";   
// }

$_SESSION['user'] = 'id1234'; 

?>