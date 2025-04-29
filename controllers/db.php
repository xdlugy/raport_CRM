<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'raport-crm';
    private $username = 'raport-crm';
    private $password = 'raport-crm';

    public function connect() {
        try {
            $dbh = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        }
        catch (PDOException $e) {
            throw new Error($e->getMessage());
        }
    }

    public function execute($query) {
        $db = $this->connect();
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

?>