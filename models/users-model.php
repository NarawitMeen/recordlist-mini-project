<?php
include_once('../database/database.php');

class UsersModel extends Database
{
    public function getUserByUsernameAndPassword($username, $password)
    {
        $sql = 'SELECT * 
                    FROM users 
                    WHERE username = ? 
                        AND password = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_fetch($stmt);

        return  $result;
    }

    public function getUserByUsername($username)
    {
        $sql = 'SELECT * 
                    FROM users 
                    WHERE username = ?';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_fetch($stmt);

        return $result;
    }

    public function addUser($username, $password)
    {
        $sql = 'INSERT INTO users (username, password) 
                    VALUES (?, ?)';
        $stmt = mysqli_prepare($this->connector, $sql);

        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_affected_rows($stmt);

        return $result;
    }
}
