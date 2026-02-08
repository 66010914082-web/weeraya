<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - วีรญา เลาต๋า (เนย)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .btn-login {
            background-color: #0d6efd;
            border: none;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="card login-card">
            <div class="card-body">
                <h3 class="text-center mb-4 fw-bold text-primary">เข้าสู่ระบบหลังบ้าน</h3>
                <p class="text-center text-muted mb-4">วีรญา เลาต๋า (เนย)</p>
                
                <form method="post" action="">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="auser" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน" autofocus required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="apwd" class="form-control" placeholder="ระบุรหัสผ่าน" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="Submit" class="btn btn-primary btn-login">
                            เข้าสู่ระบบ
                        </button>
                    </div>
                </form>

                <?php
                if(isset($_POST['Submit'])){
                    include_once("connectdb.php");
                    
                    // ป้องกัน SQL Injection ด้วย Prepared Statement
                    $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
                    mysqli_stmt_bind_param($stmt, "s", $_POST['auser']);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    
                    if ($data = mysqli_fetch_array($result)){
                        // ตรวจสอบรหัสผ่านที่ถูก Hash ไว้
                        if (password_verify($_POST['apwd'], $data['a_password'])) {
                            $_SESSION['aid'] = $data['a_id'];
                            $_SESSION['aname'] = $data['a_name'];
                            
                            echo "<div class='alert alert-success mt-3 text-center'>เข้าสู่ระบบสำเร็จ!</div>";
                            echo "<script>setTimeout(function(){ window.location='index2.php'; }, 1000);</script>";
                        } else {
                            echo "<div class='alert alert-danger mt-3 text-center'>รหัสผ่านไม่ถูกต้อง</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger mt-3 text-center'>ไม่พบชื่อผู้ใช้งานนี้</div>";
                    }
                    mysqli_stmt_close($stmt);
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>