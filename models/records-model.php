<?php
include_once('../database/database.php');

class RecordsModel extends Database
{
    public function getRecord()
    {
        $sql = 'SELECT *
                FROM records';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        return $result;
    }

    public function getRecordByName($recordName)
    {
        $sql = 'SELECT * 
                    FROM records
                    WHERE record_name = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 's', $recordName);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_fetch($stmt);

        return $result;
    }

    public function getRecordById($recordId)
    {
        $sql = 'SELECT * 
                    FROM records 
                    WHERE record_id = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'i', $recordId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_fetch($stmt);

        return $result;
    }

    public function getRecordIdByName($recordName)
    {
        $sql = 'SELECT record_id 
                    FROM records 
                    WHERE record_name = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 's', $recordName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $recordId);
        mysqli_stmt_fetch($stmt);

        return $recordId;
    }

    public function getRecordNameById($recordId)
    {
        $sql = 'SELECT record_name 
                    FROM records 
                    WHERE record_id= ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'i', $recordId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $recordName);
        mysqli_stmt_fetch($stmt);

        return $recordName;
    }

    public function deleteRecord($recordId)
    {
        $sql = 'DELETE FROM records
                    WHERE record_id = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'i', $recordId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_affected_rows($stmt);

        return $result;
    }

    public function deleteRecordByName($recordName)
    {
        $sql = 'DELETE FROM records
                    WHERE record_name = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 's', $recordName);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_affected_rows($stmt);

        return $result;
    }

    public function addRecord($recordName)
    {
        $sql = 'INSERT INTO records (record_name) 
                    VALUES (?)';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 's', $recordName);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_affected_rows($stmt);

        return $result;
    }

    public function getRecordByNameAndExceptID($recordId, $recordName)
    {
        $sql = 'SELECT * 
                    FROM records 
                    WHERE record_name = ? 
                        AND record_id != ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'si', $recordName, $recordId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_fetch($stmt);

        return $result;
    }

    public function editRecord($recordId, $recordName)
    {
        $sql = 'UPDATE records 
                    SET record_name = ? 
                    WHERE record_id = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'si', $recordName, $recordId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_affected_rows($stmt);

        return $result;
    }
}
