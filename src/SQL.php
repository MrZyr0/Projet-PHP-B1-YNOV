<?php

class SQL
{
    private $PDO = null;

    function __construct()
    {
        $dsn = 'mysql:host=localhost';
        $user = 'root';
        $password = '';

        $this->PDO = new PDO($dsn, $user, $password);
    }

    function queryGetData(string $Requette)
    {
        $Statement = $this->PDO->prepare($Requette);

        $Statement->execute();

        return $Statement->fetchAll();
    }

    function queryExec(string $Requette)
    {
        return $this->PDO->exec($Requette);
    }


}

?>
