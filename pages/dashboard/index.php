<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>หน้าหลัก | AppzStory</title>

  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt&display=swap">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php include_once('../includes/sidebar.php') ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">หน้าหลัก AppzStory</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">จำนวนผู้เข้าชม</h3>
                                    <a href="javascript:void(0);">ดูรายงาน</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">2,188</span>
                                        <span>ผู้เข้าชมเมื่อเวลาผ่านไป</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 12.5%
                                        </span>
                                        <span class="text-muted">ตั้งแต่สัปดาห์ที่ผ่านมา</span>
                                    </p>
                                </div>

                                <div class="position-relative mb-4">
                                    <canvas id="visitors-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> ในสัปดาห์นี้
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">รายงานยอดขาย</h3>
                                    <a href="javascript:void(0);">ดูรายงาน</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">$18,230.00</span>
                                        <span>ยอดขายเมื่อเวลาผ่านไป</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                        </span>
                                        <span class="text-muted">ตั้งแต่เดือนที่แล้ว</span>
                                    </p>
                                </div>

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> ปีนี้
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-gray"></i> ปีที่แล้ว
                                    </span>
                                </div>
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
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/pages/dashboard.js"></script>
</body>
</html>
