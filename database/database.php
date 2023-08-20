<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'recordband_db');
define('DB_PORT', '8889');

class Database
{
    protected $connector;

    public function __construct()
    {
        $this->connector = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

        if (mysqli_connect_errno()) {
            die('Fail to connect : ' . mysqli_connect_error());
        }

        // echo 'connect success';
    }
}
