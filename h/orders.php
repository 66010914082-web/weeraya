<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - ระบบหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
        }
        /* Sidebar Style */
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
        /* Table Style */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="admin-profile">
                <i class="bi bi-person-circle fs-1 mb-2 text-primary"></i>
                <h6 class="mb-0 text-white"><?php echo $_SESSION['aname']; ?></h6>
                <small class="text-muted">Admin Online</small>
            </div>
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">
                            <i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <i class="bi bi-box-seam me-2"></i> การจัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="orders.php">
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
                <h1 class="h2"><i class="bi bi-cart-fill text-primary"></i> จัดการออเดอร์</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-download"></i> ส่งออกรายงาน
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold">รายการสั่งซื้อล่าสุด</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>เลขที่สั่งซื้อ</th>
                                    <th>วันที่</th>
                                    <th>ชื่อลูกค้า</th>
                                    <th>ราคารวม</th>
                                    <th>สถานะ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-67001</td>
                                    <td>2024-05-20 10:30</td>
                                    <td>สมชาย ใจดี</td>
                                    <td>1,250.00 ฿</td>
                                    <td><span class="badge bg-warning text-dark">รอชำระเงิน</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info text-white"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-67002</td>
                                    <td>2024-05-20 11:15</td>
                                    <td>มานี มีนา</td>
                                    <td>450.00 ฿</td>
                                    <td><span class="badge bg-success">ชำระเงินแล้ว</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info text-white"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>