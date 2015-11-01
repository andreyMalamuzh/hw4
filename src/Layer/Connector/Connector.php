<?php

namespace Layer\Connector;

class Connector implements ConnectorInterface
{
    public function dbConnect($host, $databaseName, $user, $password)
    {
        return new \PDO('mysql:host='. $host. 'dbname='. $databaseName, $user, $password);
    }

    public function dbConnectClose($database)
    {
        $database = NULL;
    }
}
