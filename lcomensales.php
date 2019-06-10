<?php
$link = mysqli_connect("localhost", "root", "", "c-una");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select *from comensales";
$result = mysqli_query($link, $query);

echo "<table class='container table table-hover table-responsive-sm'>";
echo "<thead>";
echo "<th>N°</th>";
echo "<th>escuela</th>";
echo "<th>Nombre</th>";
echo "<th>codigo</th>";

echo "<th>dni</th>";
echo "</thead>";
echo "<tbody>";
$i = 1;
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$row['escuela_profesional']."</td>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['codigo']."</td>";
    echo "<td>".$row['dni']."</td>";
    echo "</tr>";

}
echo "</tbody>";
echo "</table>"


?>
echo "<th>Escuela Profesional</th>";
echo "<th>Nombre</th>";
echo "<th>codigo</th>";
echo "<th>dni</th>";
echo "</thead>";
echo "<tbody>";
$i = 1;
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['escuela_profesional']."</td>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['codigo']."</td>";
    echo "<td>".$row['dni']."</td>";
    echo "</tr>";

}
echo "</tbody>";
echo "</table>"


?>