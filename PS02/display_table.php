<?php
include('./database_connection.php');

$sql = "SELECT * FROM s_phone_lists";

$result = $conn->query($sql);


echo "<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Mobile</th>
  </tr>";

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "</tr>";
    }
}
echo"
</table>
";
    
