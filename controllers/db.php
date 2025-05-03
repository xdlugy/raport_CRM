<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'raport-crm';
    private $username = 'raport-crm';
    private $password = 'raport-crm';

    public function connect() {
        try {
            $dbh = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        }
        catch (PDOException $e) {
            throw new Error($e->getMessage());
        }
    }

    public function execute($query, $args) {
        $db = $this->connect();
        $stmt = $db->prepare($query);
        foreach($args as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt;
    }
}

?>