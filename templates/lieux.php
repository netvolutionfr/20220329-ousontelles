<?php
require_once "config.php";

try {
    $db = new PDO(
        "mysql:host=$dbhost;dbname=$dbname",
        $dbuser,
        $dbpassword
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT nom FROM `lieux` GROUP BY nom ORDER BY nom ";

$resultats = $db->query($sql);

foreach ($resultats as $resultat) {
    echo '<div class="lieu">';
    echo utf8_encode($resultat["nom"]);
    echo '</div>';
}
