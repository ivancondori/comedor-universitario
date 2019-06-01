<html>
<head>
    <title>Listado</title>
    <link rel="stylesheet" href="css\bootstrap\dist\css\bootstrap.css">
</head>
</html>
<?php
$link = mysqli_connect("localhost", "root", "", "c-una");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select *from comensales";
$result = mysqli_query($link, $query);

echo "<table class='table table-hover'>";
echo "<thead>";
echo "<th>N°</th>";
echo "<th>nombre</th>";
echo "<th>codigo</th>";

echo "</thead>";
echo "<tbody>";
$i = 1;
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['codigo']."</td>";

    echo "</tr>";

}
echo "</tbody>";
echo "</table>"


?>