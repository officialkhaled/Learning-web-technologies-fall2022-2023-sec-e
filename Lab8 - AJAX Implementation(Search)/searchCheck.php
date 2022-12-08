<?php

  require_once ("models/db.php");

  /* search for name in database using php */
  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "select * from user_data where username like '%$search%'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th><center>{$row['username']}</center></th>";
        echo "<td><center>{$row['email']}</center></td>";
        echo "</tr>";
      }
    } else {
      echo "No results found";
    }
  }

?>
