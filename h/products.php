<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - ระบบหลังบ้าน</title>
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
        .product-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="admin-profile">
                <i class="bi bi-person-circle fs-1 mb-2 text-info"></i>
                <h6 class="mb-0 text-white"><?php echo $_SESSION['aname']; ?></h6>
                <small class="text-muted">Admin Panel</small>
            </div>
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">
                            <i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">
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
                <h1 class="h2">การจัดการสินค้า</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="product_add.php" class="btn btn-primary shadow-sm">
                        <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                    </a>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">ภาพ</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>หมวดหมู่</th>
                                    <th>ราคา</th>
                                    <th>คงเหลือ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <img src="https://via.placeholder.com/50" alt="product" class="product-img">
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark">เสื้อยืด Oversize</div>
                                        <small class="text-muted">รหัสสินค้า: P001</small>
                                    </td>
                                    <td><span class="badge bg-secondary">เสื้อผ้าแฟชั่น</span></td>
                                    <td class="fw-bold">290.00 ฿</td>
                                    <td>
                                        <div class="progress" style="height: 5px; width: 80px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                                        </div>
                                        <small class="text-muted">45 ชิ้น</small>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group border rounded shadow-sm">
                                            <a href="#" class="btn btn-white btn-sm border-0 px-3" title="แก้ไข"><i class="bi bi-pencil-square text-warning"></i></a>
                                            <a href="#" class="btn btn-white btn-sm border-0 px-3" title="ลบ" onclick="return confirm('ยืนยันการลบสินค้า?')"><i class="bi bi-trash text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <p class="text-muted mt-3 small">* ข้อมูลนี้ดึงมาจากระบบฐานข้อมูลหลังบ้าน</p>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>