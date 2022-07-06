<?php
if($_POST["message"]) {
mail("psycc4@nottingham.ac.uk", "Sample",
$_POST["message"]. "From: $_POST["email"]");
}
?>