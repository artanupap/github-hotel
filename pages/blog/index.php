<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>จัดการบทความ | AppzStory</title>
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" >
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/bootstrap-toggle/bootstrap-toggle.min.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">

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
                                <h3 class="card-title" style="line-height: 2.1rem;">รายชื่อบทความ</h3>
                                <a href="form-create.php" class="btn btn-primary float-right">เพิ่มบทความ</a>
                            </div>
                            <div class="card-body">
                                <table id="data" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>รูปภาพ</th>
                                            <th>หัวข้อ</th>
                                            <th class="d-none d-md-block">หัวข้อย่อย</th>
                                            <th>สถานะ</th>
                                            <th>แก้ไขล่าสุด</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php 
                                            for($i = 1; $i <= 20; $i++){ 
                                            $timeago = '2020-06-01 01:'.rand(10,59).':00';
                                        ?>
                                        <tr>
                                            <td class="align-middle">
                                                <img src="../../assets/img/photo5.jpg" class="img-fluid d-block mx-auto" width="130px" alt="">
                                            </td>
                                            <td class="align-middle">HTML<?php echo $i; ?> คืออะไร</td>
                                            <td class="align-middle d-none d-md-block">ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล</td>
                                            <td class="align-middle">
                                                <input class="toggle-event" data-id="1" type="checkbox" name="status" checked data-toggle="toggle" data-on="เผยแพร่" data-off="ปิด" data-onstyle="success" data-style="ios">
                                            </td>
                                            <td class="align-middle">
                                                <span>เผยแพร่แล้ว</span>
                                                <div class="minor" title="<?php echo $timeago; ?>"><?php echo time_ago($timeago); ?></div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="form-edit.php?id=<?php echo $i; ?>" title="แก้ไขข้อมูล"><i class="far fa-edit text-warning"></i></a>
                                                <a onclick="deleteItem(<?php echo $i; ?>)" title="ลบข้อมูล"><i class="far fa-trash-alt text-danger"></i></a>
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
<script src="../../assets/js/adminlte.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<script>
    $(function () {
        $('#data').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": 'ค้นหา'
            }
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
