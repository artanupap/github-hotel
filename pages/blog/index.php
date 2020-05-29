<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>จัดการบทความ | AppzStory</title>
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" >
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
                            <li class="breadcrumb-item active">บทความ</li>
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
                                <h3 class="card-title" style="line-height: 2.1rem;">รายชื่อ</h3>
                                <a href="form-create.php" class="btn btn-primary float-right">เพิ่มบทความ</a>
                            </div>
                            <div class="card-body">
                                <table id="data" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รูปภาพ</th>
                                            <th>หัวข้อ</th>
                                            <th>หัวข้อย่อย</th>
                                            <th>วันที่แก้ไข</th>
                                            <th>การเปลี่ยนแปลง</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php for($i = 1; $i <= 5; $i++){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <img src="../../dist/img/photo5.jpg" class="img-fluid d-block mx-auto" width="150px" alt="">
                                            </td>
                                            <td>HTML<?php echo $i; ?> คืออะไร</td>
                                            <td>ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล</td>
                                            <td>29 May 2020 | 02:00</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="form-edit.php?id=<?php echo $i; ?>" type="button" class="btn btn-warning"><i class="far fa-edit"></i> แก้ไข</a>
                                                    <button type="button" class="btn btn-danger" onclick="deleteItem(<?php echo $i; ?>)"><i class="far fa-trash-alt"></i> ลบ</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    $(function () {
        $('#data').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    function deleteItem(id){
        if( confirm('Are you sure, You want to delete this item!') ){
            window.location = `delete.php?id=${id}`
        }
    }
</script>
</body>
</html>
