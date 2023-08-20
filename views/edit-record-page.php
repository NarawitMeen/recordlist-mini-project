<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>

<body>
    <h1>
        เปลี่ยนชื่อค่ายเพลง
    </h1>
    <?= $msgRecord ?>
    <!-- <?= $recordId ?>
        <?= $recordName ?>
        <?= $newRecordName ?> -->
    <form method="POST">
        <input type="hidden" name="record_id" value="<?= $recordId ?>">
        <label for="newrecord">ชื่อค่ายเพลงใหม่</label>
        <input type="text" name="new_record_name" value="<?= $recordName ?>"><br>
        <button type="submit" name="edit_record">แก้ไข</button><br>
        <p>
            <a href="home-controller.php">
                กลับหน้าแรก
            </a>
        </p>
    </form>
</body>

</html>