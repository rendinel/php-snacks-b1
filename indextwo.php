<?php
$_GET["mail"];
$_GET["name"];
$_GET["age"];
echo$_GET["mail"];
echo "<br>";
echo$_GET["name"];
echo "<br>";
echo$_GET["age"];
echo "<br>";
$simbol = "@";
$simbolTwo = ".";
?>

<br>

<?php
if (strpos($_GET["mail"], $simbol) && strpos($_GET["mail"], $simbolTwo) !== false && strlen($_GET["name"]) > 3 && is_numeric($_GET["age"])) {
  echo "Accesso riuscito";
} else {
  echo "Accesso negato";
}

?>
