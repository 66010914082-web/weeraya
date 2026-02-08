<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>วีรญา เลาต๋า (เนย) - Pop Supermarket</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .card { border: none; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .table img { border-radius: 5px; object-fit: cover; }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">ระบบจัดการข้อมูล Pop Supermarket</h3>
            <p class="mb-0">ผู้ดูแลระบบ: วีรญา เลาต๋า (เนย)</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-hover" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Order ID</th>
                            <th>รูปภาพ</th>
                            <th>สินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once("connectdb.php");
                            $sql = "SELECT * FROM popsupermarket";
                            $rs = mysqli_query($conn, $sql);
                            $total = 0;
                            
                            while ($data = mysqli_fetch_array($rs)) {
                                $total += $data['p_amount'];
                        ?>
                        <tr>
                            <td><?php echo $data['p_order_id']; ?></td>
                            <td><img src="<?php echo $data ['p_product_name'];?>.jpg" width="55"></td>
                            <td><strong><?php echo $data['p_product_name']; ?></strong></td>
                            <td><span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span></td>
                            <td><?php echo date('d/m/Y', strtotime($data['p_date'])); ?></td>
                            <td><?php echo $data['p_country']; ?></td>
                            <td class="text-end text-primary fw-bold"><?php echo number_format($data['p_amount'], 0); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <th colspan="6" class="text-end">ยอดรวมทั้งสิ้น (Total):</th>
                            <th class="text-end text-danger h5"><?php echo number_format($total, 0); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 10,
            "order": [[0, "desc"]] // เรียงตาม Order ID ล่าสุด
        });
    });
</script>

</body>
</html>