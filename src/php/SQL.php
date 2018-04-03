<?php

class SQL
{
    private $PDO = null;

    function __construct()
    {
        $dsn = 'mysql:host=localhost';
        $user = 'root';
        $password = '';

        $this->PDO = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    function queryGetData(string $sql)
    {
        $Statement = $this->PDO->prepare($sql);

        $Statement->execute();

        return $Statement->fetchAll();
    }

    function queryCreateData(string $sql)
    {
        $Statement = $this->PDO->prepare($sql);

        return $Statement->execute();
    }


}

?>
