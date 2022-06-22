<?php error_reporting(-1);

// for ($i = 1; $i <= 10; $i++) {
//    echo "{$i} <br>";
// }


// for ($i = 20; $i >= 1; $i--) {
//     echo "{$i} <br>";
//  }

echo "<select>";
for ($year = 1900; $year <= 2022; $year++) {
   echo "<option> $year </option>";
}
echo "</select>";


echo '<table border = "1" width = "100%">';
for ($tr = 1; $tr < 10; $tr++) {
    echo "<tr>";
    for ($td = 1; $td < 10; $td++) {
       echo "<td> $td * $tr =" . $td * $tr . "</td>";
    }
    echo "</tr>";
}
echo "</table>";