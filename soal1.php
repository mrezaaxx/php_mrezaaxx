<?php

$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
$total = 0;
for($b = $a; $b>0; $b--){
$total += $b;
}
  echo "<tr>\n";
  echo "<td colspan ='$jml'>Total : $total</td>\n";
  echo "</tr>\n";
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--)
    {
      $total += $b;
      echo "<td>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
?>
