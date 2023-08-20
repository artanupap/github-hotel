<?php 
	if(isset($_POST['submit'])){
		header('Location: ./');
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>AppzStory Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>
<div class="bg"></div>
<div class="container h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-header"> 
          <h5 class="text-center"> ระบบการจัดการ AppzStory Admin </h5>
        </div>
        <div class="card-body">
          <form id="form_login_x" name="form_login_x" method="post" action="">
          <!-- <form action="" method="post"> -->
            <div class="form-group">
              <label for="username">username</label>
              <input type="text" id="username" class="form-control" placeholder="username">
            </div>

            <div class="form-group">
              <label for="password">password</label>
              <input type="password" id="password" class="form-control" placeholder="password">
            </div>

            <button name="submit" class="btn btn-primary btn-block" type="submit" name="LoginBT" id="LoginBT"> เข้าสู่ระบบ</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery Bootstrap 4 -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  $(function(){
      $("#form_login_x").submit(function(){ // เมื่อมีการ submit ฟอร์ม ล็อกอิน
          // ส่งข้อมูลไปตรวจสอบที่ไฟล์ check_login.php แบบ post ด้วย ajax
          $.post("check_login.php",$("#form_login_x").serialize(),function(data){
            window.location='index.php';
  //             if(data==1){ // ตรวจสอบผลลัพธ์
  //                 // ถ้าล็อกอินผ่าน ให้ลิ้งค์ไปที่หน้า main_page.php
  //                 window.location='login.php';
  //             }else{
  //                 /// คำสั่งหรือแจ้งเตือนกรณีล็อกอินไม่ผ่าน
  //                 $("#form_login_x")[0].reset();
  //             }
          });
          return false;
      });
  });
</script>

</body>
</html>
