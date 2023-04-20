<?php
print "<table border=1>";
print "<tr><td></td>";
for ($i = 1; $i <= $_POST['size']; $i++) {
        print "<td>$i</td>";
}

print "</tr>";

for ($i = 1; $i <= $_POST['size']; $i++) {
        print "<tr>";
        print "<td>$i</td>";
        for ($j = 1; $j <= $_POST['size']; $j++) {
                $curBox = $i * $j;
                print "<td> $curBox </td>";
        }
        print "</tr>";
}
?>