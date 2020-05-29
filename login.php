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
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
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
          <form action="" method="post">
            <div class="form-group">
              <label for="username">ชื่อผู้ใช้งาน</label>
              <input type="text" id="username" class="form-control" placeholder="username">
            </div>

            <div class="form-group">
              <label for="password">รหัสผ่าน</label>
              <input type="password" id="password" class="form-control" placeholder="password">
            </div>

            <button name="submit" class="btn btn-primary btn-block"> เข้าสู่ระบบ</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery Bootstrap 4 -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
