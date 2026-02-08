<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - ระบบจัดการหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            color: white;
        }
        .nav-link {
            color: rgba(255,255,255,0.8);
            transition: 0.3s;
            padding: 12px 20px;
        }
        .nav-link:hover {
            background-color: #343a40;
            color: #fff;
        }
        .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
        }
        .main-content {
            padding: 20px;
        }
        .admin-profile {
            padding: 20px;
            background: #1a1d20;
            text-align: center;
            border-bottom: 1px solid #343a40;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="admin-profile">
                <i class="bi bi-person-circle fs-1 mb-2"></i>
                <h6 class="mb-0"><?php echo $_SESSION['aname']; ?></h6>
                <small class="text-muted">Administrator</small>
            </div>
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index2.php">
                            <i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <i class="bi bi-box-seam me-2"></i> การจัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="bi bi-cart-check me-2"></i> จัดการออเดอร์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">
                            <i class="bi bi-people me-2"></i> จัดการลูกค้า
                        </a>
                    </li>
                    <li class="nav-item mt-4">
                        <hr class="mx-3">
                        <a class="nav-link text-danger" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')">
                            <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary">ยินดีต้อนรับกลับมาคุณ <?php echo $_SESSION['aname']; ?>!</h4>
                    <p class="card-text text-muted">นี่คือระบบจัดการหลังบ้านสำหรับดูแลข้อมูลร้านค้าของคุณ</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card bg-primary text-white shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">สินค้าทั้งหมด</h5>
                            <p class="display-6 fw-bold">120</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-success text-white shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">ออเดอร์วันนี้</h5>
                            <p class="display-6 fw-bold">15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-warning text-dark shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">ลูกค้าใหม่</h5>
                            <p class="display-6 fw-bold">8</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>