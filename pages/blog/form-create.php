<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>เพิ่มบทความ | AppzStory</title>
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" >

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include_once('../includes/sidebar.php') ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">จัดการบทความ</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">บทความ</a></li>
                            <li class="breadcrumb-item active">เพิ่มข้อมูล</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="line-height: 2.1rem;">เพิ่มบทความ</h3>
                                <a href="index.php" class="btn btn-warning float-right">กลับ</a>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="subject">หัวข้อเรื่องใหม่</label>
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="หัวข้อเรื่องใหม่" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="sub_title">หัวข้อย่อย</label>
                                            <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="หัวข้อย่อย" required>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <textarea id="details" class="textarea" name="details" placeholder="Place some text here"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            </textarea>
                                        </div>
                                        <!-- <div class="form-group col-sm-4">
                                            <label for="first_name">หัวข้อ</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="หัวข้อ" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="first_name">หัวข้อ</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="หัวข้อ" required>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">บันทึกข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../includes/footer.php') ?>
</div>

<!-- SCRIPTS -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $(function () {
        $('#details').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 350,
        });

        $.upload = function (file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajax({
                method: 'POST',
                url: 'upload.php',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function (img) {
                    $('#details').summernote('insertImage', img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
    })
</script>

</body>
</html>
