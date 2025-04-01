<?php
try {
    $dbh = new PDO('pgsql:host=localhost; dbname=raport-crm', 'raport-crm', 'raport-crm');
}
catch (PDOException $e) {
    throw new Error($e);
}
?>