<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>วีรญา เลาต๋า (เนย)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container { width: 600px; margin: 20px auto; }
    table { margin: 0 auto; border-collapse: collapse; width: 50%; }
    h1, h2 { text-align: center; }
</style>
</head>

<body>
<h1>วีรญา เลาต๋า (เนย)</h1>

<table border="1">
<tr>
    <th>ประเทศ</th>
    <th>ยอดขาย</th>
</tr>
<?php
    include_once("connectdb.php");
    $sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country";
    $rs = mysqli_query($conn,$sql);

    // 2. เตรียมตัวแปรสำหรับเก็บข้อมูลไปใช้ใน JavaScript
    $countries = [];
    $totals = [];

    while ($data = mysqli_fetch_array($rs)){
        $countries[] = $data['p_country'];
        $totals[] = $data['total'];
?>
<tr>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['total'],0);?></td>
</tr>
<?php } ?>
</table>

<hr>

<div class="chart-container">
    <h2>ยอดขายแยกตามประเทศ (Bar Chart)</h2>
    <canvas id="myBarChart"></canvas>
</div>

<div class="chart-container">
    <h2>สัดส่วนยอดขาย (Pie Chart)</h2>
    <canvas id="myPieChart"></canvas>
</div>

<script>
// 4. นำข้อมูลจาก PHP เข้าสู่ JavaScript
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// กราฟแท่ง (Bar Chart)
const ctxBar = document.getElementById('myBarChart').getContext('2d');
new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรวม',
            data: dataValues,
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    }
});

// กราฟวงกลม (Pie Chart)
const ctxPie = document.getElementById('myPieChart').getContext('2d');
new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: [
                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
            ]
        }]
    }
});
</script>

</body>
</html>