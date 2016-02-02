<?php

$sql = "select id, color, potencia from coches";
$con = mysqli_connect("localhost", "root", "", "pruebas");
$result = mysqli_query($con, $sql);
