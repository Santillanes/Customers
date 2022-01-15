<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=dbempresys', 'root', '');
    //echo "Conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>