<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Tabla de multiplicar con cabecera (Formulario). for (3).
    Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Tabla de multiplicar con cabecera (Formulario)</h1>

<form  method="get">
  
    
    <p>Escriba un número y mostraré la tabla de
      multiplicar hasta ese número.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número:</strong></td>
          <td><input type="number" name="numero" min="1" max="100" value="10"  /> </td>
        </tr>
      </tbody>
    </table>

    <p><input type="submit" value="Mostrar" /> 
      
</form>
<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$numero = recoge("numero");
$numeroMinimo = 1;
$numeroMaximo = 100;
$numeroOk = false;

if ($numero == "") {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla.</p>\n";
} elseif (!is_numeric($numero)) {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla como número.</p>\n";
} elseif (!ctype_digit($numero)) {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla "
        . "como número entero positivo.</p>\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "<p class=\"aviso\">El tamaño de la tabla debe estar entre "
    	. "$numeroMinimo y $numeroMaximo.</p>\n";
} else {
	$numeroOk = true;
}

if ($numeroOk) {
    print "<table class=\"conborde\">\n";
    print "  <tbody>\n";
    print "    <tr>\n";
    print "      <th>X</th>\n";
    for ($j = 1; $j <= $numero; $j++) {
        print "      <th>$j</th>\n";
    }
    print "    </tr>\n";

    for ($i = 1; $i <= $numero; $i++) {
        print "    <tr>\n";
        print "      <th>$i</th>\n";
        for ($j = 1; $j <= $numero; $j++) {
            print "      <td>" . ($i * $j) . "</td>\n";
        }
        print "    </tr>\n";
    }
    print "  </tbody>\n";
    print "</table>\n";
}

?>

