<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - ระบบหลังบ้าน</title>
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
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .avatar-circle {
            width: 40px;
            height: 40px;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
            color: #495057;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="admin-profile">
                <i class="bi bi-person-workspace fs-1 mb-2 text-warning"></i>
                <h6 class="mb-0 text-white"><?php echo $_SESSION['aname']; ?></h6>
                <small class="text-muted">Admin Panel</small>
            </div>
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> การจัดการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart-check me-2"></i> จัดการออเดอร์</a></li>
                    <li class="nav-item"><a class="nav-link active" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                    <li class="nav-item mt-4">
                        <hr class="mx-3">
                        <a class="nav-link text-danger" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><i class="bi bi-people-fill text-primary"></i> จัดการลูกค้า</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-envelope-at"></i> ส่งอีเมลแจ้งเตือน</button>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">รายชื่อสมาชิกในระบบ</h5>
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" class="form-control" placeholder="ค้นหาชื่อลูกค้า...">
                        <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">ลูกค้า</th>
                                    <th>ข้อมูลติดต่อ</th>
                                    <th>วันที่สมัคร</th>
                                    <th>สถานะ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle me-3">สม</div>
                                            <div>
                                                <div class="fw-bold">สมชาย ใจดี</div>
                                                <small class="text-muted">ID: CUST-001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div><i class="bi bi-envelope me-1"></i> somchai@email.com</div>
                                        <div><i class="bi bi-telephone me-1"></i> 081-234-5678</div>
                                    </td>
                                    <td>20 ม.ค. 2024</td>
                                    <td><span class="badge rounded-pill bg-success-subtle text-success border border-success">Active</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-light border" title="ประวัติการซื้อ"><i class="bi bi-history"></i></button>
                                            <button class="btn btn-sm btn-light border text-danger" title="ระงับการใช้งาน"><i class="bi bi-slash-circle"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>