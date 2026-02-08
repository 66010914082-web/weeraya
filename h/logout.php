<?php
    session_start();
    
    // ทำลาย Session ทั้งหมด
    unset($_SESSION['aid']);
    unset($_SESSION['aname']);
    // หรือใช้ session_destroy(); เพื่อล้างข้อมูลทั้งหมดในครั้งเดียว
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ออกจากระบบ - วีรญา เลาต๋า (เนย)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logout-card {
            max-width: 400px;
            width: 100%;
            text-align: center;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .icon-box {
            font-size: 4rem;
            color: #ffc107;
            margin-bottom: 20px;
        }
        .spinner-border {
            width: 1.5rem;
            height: 1.5rem;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card logout-card p-5 mx-auto">
        <div class="card-body">
            <div class="icon-box">
                <i class="bi bi-box-arrow-right"></i>
            </div>
            <h3 class="fw-bold mb-3">ออกจากระบบสำเร็จ</h3>
            <p class="text-muted mb-4">ขอบคุณที่ใช้บริการค่ะ คุณวีรญา <br> กำลังพาท่านกลับไปยังหน้าหลัก...</p>
            
            <div class="d-flex justify-content-center align-items-center text-primary">
                <div class="spinner-border me-2" role="status"></div>
                <span>กรุณารอสักครู่...</span>
            </div>
        </div>
    </div>
</div>
<script>
setTimeout(function(){
	window.location.href = 'index.php';
},1500);
</script>
