<?php error_reporting(-1);

//1
$x = 1900;

echo '<select>';
while ($x <= 2022){
    // echo '<option>'. $x . '</option>';
    echo "<option> $x </option>";
    // echo '<option>';
    // echo "{$x}";
    // echo '</option>';
    $x++;
}
echo '</select>';

//2
echo '<table border ="1" width = "100%">';
$x = 1;
while($x <= 10){
    echo "<tr>";
    $y = 1;
    while($y <= 10){
        echo "<td> $x * $y = " . $y * $x . "</td>";
        $y++;
    }
    echo "</tr>";
    $x++;
}
echo '</table>';
