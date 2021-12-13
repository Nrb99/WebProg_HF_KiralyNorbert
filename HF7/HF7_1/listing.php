<?php
require "db.php";
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

echo "<a href='insert.php'>new product</a>"
;
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=1>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["id"]."</td>";
        echo "<td>". $row["title"]."</td>";
        echo "<td>". $row["price"]."</td>";
        echo "<td>". $row["category"]."</td>";
        echo "<td>". $row["image"]."</td>";
        echo "<td><a href=\"update.php?id=" . $row["id"] . "\">Update</a></td>";
        echo "<td><a href=\"delete.php?id=" . $row["id"] . "\">Delete</a></td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();