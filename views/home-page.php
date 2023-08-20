<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h2>
        ยินดีต้อนรับสู่หน้าแรก
    </h2>
    <?php echo $msgRecord ?>
    <table class="table table-bordered" border="2">
        <thead>
            <tr>
                <th>ชื่อค่าย</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record) { ?>
                <tr>
                    <td>
                        <?php echo $record['record_name'] ?>
                    </td>
                    <td>
                        <a href="home-controller.php?record_id=<?php echo $record['record_id'] ?>">
                            แก้ไขข้อมูล
                        </a>
                    </td>
                    <td>
                        <form method="POST" onclick="return confirm('คุณต้องการลบข้อมูลค่ายเพลงนี้ใช่หรือไม่?')">
                            <input type="hidden" name="record_id" value="<?php echo $record['record_id'] ?>">
                            <button type="submit" name="delete_record">ลบข้อมูล</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="home-controller.php?add_record=true">
        เพิ่มค่ายเพลง
    </a><br>
    <a href=" home-controller.php?logout=true">
        Logout
    </a>
</body>

</html>