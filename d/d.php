<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>วีรญา เลาต๋า (เนย)</title>
  
  <!-- เชื่อมโยงกับ Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #007bff;
    }
    .form-group label {
      font-weight: bold;
    }
    .btn-custom {
      background-color: #007bff;
      color: white;
      border: none;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="form-container">
      <h1 class="text-center mb-4">ฟอร์มสมัครสมาชิก -- วีรญา เลาต๋า (เนย)- chatgpt</h1>
      <form method="post" action="">
        <div class="mb-3">
          <label for="fullname" class="form-label">ชื่อ-สกุล</label>
          <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
        </div>
        
        <div class="mb-3">
          <label for="phone" class="form-label">เบอร์โทร</label>
          <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        
        <div class="mb-3">
          <label for="height" class="form-label">ความสูง</label>
          <input type="number" class="form-control" id="height" name="height" min="100" max="220" required>
          <small class="form-text text-muted">กรุณากรอกความสูงในหน่วยเซนติเมตร</small>
        </div>
        
        <div class="mb-3">
          <label for="color" class="form-label">สีที่ชอบ</label>
          <input type="color" class="form-control form-control-color" id="color" name="color">
        </div>
        
        <div class="mb-3">
          <label for="major" class="form-label">สาขาวิชา</label>
          <select class="form-select" name="major" id="major">
            <option value="การบัญชี">การบัญชี</option>
            <option value="การจัดการ">การจัดการ</option>
            <option value="การตลาด">การตลาด</option>
            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
          </select>
        </div>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" name="Submit" class="btn btn-custom">สมัครสมาชิก</button>
          <button type="reset" class="btn btn-secondary">รีเซ็ต</button>
        </div>

        <div class="d-flex justify-content-center mt-3">
          <button type="button" class="btn btn-outline-primary" onclick="window.location.href='https://www.msu.ac.th';">ไปที่ MSU</button>
          <button type="button" class="btn btn-outline-info ms-2" onclick="window.print();">พิมพ์</button>
        </div>
      </form>
    </div>
  </div>

  <hr>

  <?php
  if (isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    $major = $_POST['major'];
    
    echo "<div class='container'>";
    echo "<h3>ข้อมูลที่กรอก:</h3>";
    echo "ชื่อ-สกุล: " . htmlspecialchars($fullname) . "<br>";
    echo "เบอร์โทร: " . htmlspecialchars($phone) . "<br>";
    echo "ความสูง: " . htmlspecialchars($height) . " ซม.<br>";
    echo "สีที่ชอบ: <div style='background-color: {$color}; width: 50px; height: 50px;'></div><br>";
    echo "สาขาวิชา: " . htmlspecialchars($major) . "<br>";
    echo "</div>";
  }
  ?>

  <!-- เชื่อมโยงกับ JavaScript ของ Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
