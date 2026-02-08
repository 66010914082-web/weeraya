<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน - บริษัท พังซัพพลายเออร์ จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* Custom CSS เพื่อปรับแต่งเล็กน้อย */
    .header-bg {
        background-color: #007bff; /* สีน้ำเงินหลักของ Bootstrap */
        color: white;
        padding: 1.5rem 0;
        border-radius: .375rem .375rem 0 0;
    }
    .card-footer {
        background-color: #f8f9fa; /* สีเทาอ่อนสำหรับ footer */
    }
</style>
</head>

<body>
<div class="container my-5">
    
    <div class="header-bg text-center mb-0">
        <h1 class="display-6">วีรญา เลาต๋า(เนย) <br> 🚀 บริษัท พังซัพพลายเออร์ จำกัด</h1>
        <p class="lead mb-0">แบบฟอร์มใบสมัครงาน</p>
    </div>

    <div class="card shadow-lg border-0 rounded-0">
        <div class="card-body p-4 p-md-5">
            
            <form method="post" action="">
                
                <h3 class="mb-4 text-primary">ตำแหน่งงานที่ต้องการสมัคร</h3>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <label for="position" class="form-label">เลือกตำแหน่งงาน *</label>
                        <select class="form-select" id="position" name="position" required>
                            <option value="" selected disabled>-- เลือกตำแหน่งที่สนใจ --</option>
                            <option value="Software Developer">Software Developer (Junior/Senior)</option>
                            <option value="Data Analyst">Data Analyst</option>
                            <option value="UI/UX Designer">UI/UX Designer</option>
                            <option value="Marketing Specialist">Marketing Specialist</option>
                            <option value="HR Coordinator">HR Coordinator</option>
                        </select>
                    </div>
                </div>

                <h3 class="mb-4 mt-5 text-primary">ข้อมูลส่วนตัว</h3>
                <div class="row g-3 mb-4">
                    
                    <div class="col-md-3">
                        <label for="prefix" class="form-label">คำนำหน้าชื่อ *</label>
                        <select class="form-select" id="prefix" name="prefix" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                    
                    <div class="col-md-9">
                        <label for="fullname" class="form-label">ชื่อ-นามสกุล *</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>

                    <div class="col-md-4">
                        <label for="dob" class="form-label">วัน/เดือน/ปีเกิด *</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>

                    <div class="col-md-8">
                        <label for="education" class="form-label">ระดับการศึกษาสูงสุด *</label>
                        <select class="form-select" id="education" name="education" required>
                            <option value="" selected disabled>-- เลือกระดับการศึกษา --</option>
                            <option value="ปวช./ปวส.">ปวช./ปวส.</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                        </select>
                    </div>
                </div>

                <h3 class="mb-4 mt-5 text-primary">ทักษะและประสบการณ์</h3>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <label for="skills" class="form-label">ความสามารถพิเศษ (ระบุทักษะทางเทคนิค/ภาษา)</label>
                        <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น: ภาษา Python, Adobe Photoshop, ภาษาอังกฤษ (ดีมาก)"></textarea>
                        <div class="form-text">โปรดระบุทักษะที่เกี่ยวข้องกับตำแหน่งงาน</div>
                    </div>

                    <div class="col-12">
                        <label for="experience" class="form-label">ประสบการณ์ทำงานโดยย่อ *</label>
                        <textarea class="form-control" id="experience" name="experience" rows="5" required placeholder="ระบุตำแหน่ง, ชื่อบริษัท, ระยะเวลาทำงาน, และหน้าที่รับผิดชอบโดยย่อ"></textarea>
                    </div>
                </div>

                <div class="mt-5 pt-3 border-top">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg me-2">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-outline-secondary btn-lg">ยกเลิก</button>
                </div>
            </form>
        </div>
        
        <div class="card-footer text-muted text-center">
            โปรดตรวจสอบข้อมูลให้ถูกต้องครบถ้วนก่อนส่งใบสมัคร
        </div>
    </div>
    
    <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])){
        $position = htmlspecialchars($_POST['position']);
        $prefix = htmlspecialchars($_POST['prefix']);
        $fullname = htmlspecialchars($_POST['fullname']);
        $dob = htmlspecialchars($_POST['dob']);
        $education = htmlspecialchars($_POST['education']);
        $skills = htmlspecialchars($_POST['skills']);
        $experience = htmlspecialchars($_POST['experience']);
        
    
			include_once("connectdb.php");
			$sql = "INSERT INTO application (a_position,a_prefix,a_fullname,a_dob,a_education,a_skills,a_experience) VALUES ('{$position}','{$prefix}','{$fullname}','{$dob}','{$education}','{skills}','{experience}');";
			mysqli_query($conn, $sql) or die ("insert ไม่ได้");
			
			echo "<script>";
			echo "alert('เพิ่มข้อมูลสำเร็จ');";
			echo "</script>";
			
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>