<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=dbcustomer', 'root', '');
    //echo "Conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>