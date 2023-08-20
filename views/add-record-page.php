<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
</head>

<body>
    <h1>
        เพิ่มค่ายเพลง
    </h1>
    <?php echo $msgRecord ?>
    <form method="POST">
        <label for="record_name">ชื่อค่ายเพลง</label><br>
        <input type="text" name="record_name" value="<?= $recordName ?>" required><br>
        <button type="submit" name="add_record">เพิ่มค่าย</button><br>
        <p>
            <a href="home-controller.php">
                กลับหน้าแรก
            </a>
        </p>
    </form>
</body>

</html>