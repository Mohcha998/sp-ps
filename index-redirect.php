<?php

$ref = (isset($_GET['ref'])) ? $_GET['ref'] : '';
// var_dump($ref);
// return;

header("Location: https://merryrianadigitallearning.com/ilead?ref=" . $ref);

?>