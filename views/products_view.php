<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado de Productos</title>
</head>
<body>
<?php
echo "<h1>Listado de productos</h1>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>";
echo "Codigo";
echo "</th>";
echo "<th>";
echo "Descripcion";
echo "</th>";
echo "<th>";
echo "precio";
echo "</th>";
echo "<th>";
echo "Fecha";
echo "</th>";
echo "<th>";
echo "id_categoria";
echo "</th>";
echo "</thead>";
echo "<tbody>";
foreach ($datos as $dato) {
echo "<tr>";
echo "<td>";
echo $dato["id_product"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["product_name"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["price"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["start_date"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["id_category"] . "<br/>";
echo "</td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
</body>
</html>
