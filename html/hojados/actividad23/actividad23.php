<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$columnas       = recoge("columnas");
$columnasMinimo = 1;
$columnasMaximo = 200;
$columnasOk     = false;

if ($columnas == "") {
    print "<p class=\"aviso\">No ha escrito el número de columnas.</p>\n";
} elseif (!is_numeric($columnas)) {
    print "<p class=\"aviso\">No ha escrito el número de columnas como número.</p>\n";
} elseif (!ctype_digit($columnas)) {
    print "<p class=\"aviso\">No ha escrito el número de columnas "
        . "como número entero positivo.</p>\n";
} elseif ($columnas < $columnasMinimo || $columnas > $columnasMaximo) {
    print "<p class=\"aviso\">El número de columnas debe estar entre "
    	. "$columnasMinimo y $columnasMaximo.</p>\n";
} else {
	$columnasOk = true;
}

if ($columnasOk) {
    print "<table class=\"conborde\">\n";
    print "  <tbody>\n";
    print "    <tr>\n";
    for ($i = 1; $i <= $columnas; $i++) {
        print "      <td>$i</td>\n";
    }
    print "    </tr>\n";
    print "  </tbody>\n";
    print "</table>\n";
}

?>
