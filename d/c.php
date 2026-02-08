<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสมัครสมาชิก --วีรญา เลาต๋า (เนย)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">📝 ฟอร์มสมัครสมาชิก --วีรญา เลาต๋า (เนย) - gemini</h1>

    <div class="card p-4 shadow-sm">
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
                <div class="input-group">
                    <input type="number" class="form-control" id="height" name="height" min="100" max="220" required>
                    <span class="input-group-text">ซม.</span>
                </div>
                <div class="form-text">*ความสูงต้องอยู่ระหว่าง 100 ถึง 220 ซม.</div>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#000000" title="เลือกสี">
            </div>

            <div class="mb-3">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select class="form-select" id="major" name="major">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="button" class="btn btn-info text-white" onClick="window.location= 'https://www.msu.ac.th';">GO to MSU</button>
                <button type="button" class="btn btn-success" onClick="window.print();">พิมพ์</button>
            </div>
        </form>
    </div>

    <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        echo '<div class="alert alert-success mt-4" role="alert">';
        echo '<h2>✅ ข้อมูลที่ส่ง:</h2>';
        echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
        echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
        echo "<p><strong>ความสูง:</strong> $height ซม.</p>";
        echo "<p class='d-flex align-items-center'><strong>สีที่ชอบ:</strong> $color 
              <span style='background-color:{$color}; width: 30px; height: 30px; display: inline-block; margin-left: 10px; border: 1px solid #ccc;'></span></p>";
        echo "<p><strong>สาขาวิชา:</strong> $major</p>";
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>