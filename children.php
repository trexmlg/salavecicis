<?php

require "gifts.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
 //$posts = $db->query("SELECT * FROM children"); //
$children = $db->query("SELECT * FROM children")->fetchALL(PDO::FETCH_ASSOC);
// $user = $db->query(); //

echo "<ul>";
foreach ($children as $children){
    echo "<li>" . $children["firstname"] . "</li>";
    echo "<li>" . $children["middlename"] . "</li>";
    echo "<li>" . $children["surname"] . "</li>";
    echo "<li>" . $children["age"] . "</li>";
}
echo "</ul>";
?>
