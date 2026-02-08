<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>🎉 สรุปผลการสมัครงาน - บริษัท พังซัพพลายเออร์ จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    body {
        background-color: #f8f9fa; /* สีเทาอ่อน */
    }
    .result-card {
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    .header-success {
        background-color: #198754; /* สีเขียวสำเร็จ */
        color: white;
        padding: 2rem 1.5rem;
        border-radius: 15px 15px 0 0;
        text-align: center;
    }
    .data-box {
        background-color: #e9f7ef; /* พื้นหลังอ่อนสำหรับข้อมูล */
        border: 1px solid #198754;
        border-radius: 8px;
        padding: 15px;
    }
    .data-item strong {
        color: #0d6efd; /* เน้นสีน้ำเงิน */
    }
    .text-area-display {
        background-color: white;
        border: 1px dashed #ced4da;
        padding: 10px;
        border-radius: 5px;
        white-space: pre-wrap; /* เพื่อให้รักษารูปแบบการขึ้นบรรทัดใหม่ */
    }
</style>
</head>

<body>
<div class="container my-5">
    <?php
    // ตรวจสอบว่ามีการส่งข้อมูลมาหรือไม่
    if (isset($_POST['Submit'])) {
        // 1. รับค่าและทำความสะอาดข้อมูล (Sanitize)
        $position = htmlspecialchars($_POST['position'] ?? 'ไม่ได้ระบุ');
        $prefix = htmlspecialchars($_POST['prefix'] ?? '');
        $fullname = htmlspecialchars($_POST['fullname'] ?? 'ไม่ได้ระบุ');
        $dob = htmlspecialchars($_POST['dob'] ?? '');
        $education = htmlspecialchars($_POST['education'] ?? 'ไม่ได้ระบุ');
        $skills = htmlspecialchars($_POST['skills'] ?? '');
        $experience = htmlspecialchars($_POST['experience'] ?? '');
        
        // 2. แปลงรูปแบบวันที่
        $dob_th = 'ไม่ได้ระบุ';
        if ($dob) {
            $dateObj = DateTime::createFromFormat('Y-m-d', $dob);
            if ($dateObj) {
                $dob_th = $dateObj->format('d/m/Y');
            }
        }
    ?>

    <div class="card result-card mx-auto" style="max-width: 800px;">
        <div class="header-success">
            <h1 class="display-6"><i class="fas fa-check-circle me-2"></i> ข้อมูลการสมัครงานได้รับแล้ว</h1>
            <p class="lead mb-0">ขอบคุณ **<?php echo $prefix . ' ' . $fullname; ?>** ที่ให้ความสนใจ</p>
        </div>

        <div class="card-body p-4 p-md-5">
            <div class="data-box mb-4">
                <h5 class="text-success mb-3"><i class="fas fa-info-circle me-1"></i> สรุปข้อมูลเบื้องต้น</h5>
                <div class="row g-3">
                    <div class="col-md-6 data-item">
                        <strong><i class="fas fa-briefcase me-1"></i> ตำแหน่งที่สมัคร:</strong> <?php echo $position; ?>
                    </div>
                    <div class="col-md-6 data-item">
                        <strong><i class="fas fa-graduation-cap me-1"></i> ระดับการศึกษา:</strong> <?php echo $education; ?>
                    </div>
                    <div class="col-md-6 data-item">
                        <strong><i class="fas fa-user me-1"></i> ชื่อ-สกุล:</strong> <?php echo $prefix . ' ' . $fullname; ?>
                    </div>
                    <div class="col-md-6 data-item">
                        <strong><i class="fas fa-birthday-cake me-1"></i> วันเดือนปีเกิด:</strong> <?php echo $dob_th; ?>
                    </div>
                </div>
            </div>

            <h5 class="mt-4 mb-2 text-primary"><i class="fas fa-puzzle-piece me-1"></i> ความสามารถพิเศษ</h5>
            <div class="text-area-display mb-4">
                <?php echo nl2br($skills ?: 'ไม่ได้ระบุความสามารถพิเศษ'); ?>
            </div>

            <h5 class="mt-4 mb-2 text-primary"><i class="fas fa-history me-1"></i> ประสบการณ์ทำงาน</h5>
            <div class="text-area-display mb-4">
                <?php echo nl2br($experience ?: 'ไม่ได้ระบุประสบการณ์ทำงาน'); ?>
            </div>

            <hr>
            <p class="text-center text-muted mt-4">
                ทางบริษัท **พังซัพพลายเออร์ จำกัด** จะดำเนินการพิจารณาและติดต่อกลับโดยเร็วที่สุด
            </p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="javascript:history.back()" class="btn btn-outline-secondary mt-3"><i class="fas fa-undo me-2"></i> กลับสู่หน้าฟอร์ม</a>
            </div>
        </div>
    </div>

    <?php 
    } else {
        // กรณีไม่มีการส่งข้อมูล POST มา
        echo '<div class="alert alert-danger text-center" role="alert">';
        echo '<h4>⚠️ ข้อผิดพลาดในการเข้าถึง</h4>';
        echo '<p>ไม่พบข้อมูลการสมัครงานที่ส่งมา โปรดกรอกแบบฟอร์มให้เรียบร้อยแล้วส่งอีกครั้ง</p>';
        echo '<a href="javascript:history.back()" class="btn btn-danger mt-2"><i class="fas fa-arrow-left"></i> กลับไปกรอกฟอร์ม</a>';
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>