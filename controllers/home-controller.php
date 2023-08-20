<?php
include('authentication-check.php');
include_once('../models/records-model.php');

// define('HOME_URL', 'home-controller.php');
// define('BAND_URL', 'band-controller.php');

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login-controller.php');
    exit();
}

$recordsModel = new RecordsModel();
$msgRecord = '';

//deleterecord 
if (isset($_POST['delete_record'])) {
    $recordId = $_POST['record_id'];
    $recordResult = $recordsModel->getRecordById($recordId);

    if ($recordResult) {
        $recordsModel->deleteRecord($recordId);
        $msgRecord = 'ลบค่ายแล้ว';
    }
}

// มาหน้า addrecord
if (isset($_GET['add_record'])) {
    $recordName = isset($_POST['record_name']) ? $_POST['record_name'] : '';

    if (isset($_POST['add_record'])) { // ถ้ากดปุ่มจากหน้า add record
        $recordResult = $recordsModel->getRecordByName($recordName);

        if ($recordResult) {
            $msgRecord = 'Record had already!';
        } else {
            $recordsModel->addRecord($recordName);
            header('Location: home-controller.php');
            exit();
        }
    }

    include('../views/add-record-page.php');
    exit();
}

//มาหน้า edit
if (isset($_GET['record_id'])) {
    $recordId = $_GET['record_id'];
    $recordName = $recordsModel->getRecordNameById($recordId);

    if (isset($_POST['edit_record'])) { //ถ้าคลิกจากหน้า edit
        $newRecordName = $_POST['new_record_name'];
        $recordId = $_POST['record_id'];

        $recordResult = $recordsModel->getRecordByNameAndExceptID($recordId, $newRecordName);
        if ($recordResult) {
            $msgRecord = 'มีค่ายนี้อยู่แล้ว';
            $recordName = $newRecordName;
        } else {
            $recordsModel->editRecord($recordId, $newRecordName);
            header('Location: home-controller.php');
            exit();
        }
    }

    include('../views/edit-record-page.php');
    exit();
}

$records = $recordsModel->getRecord(); // home

include('../views/home-page.php');
