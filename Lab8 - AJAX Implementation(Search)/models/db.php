<?php

      //Establish connection
      function getConnection() {
        $con = mysqli_connect('localhost', 'root', '', 'system_db');
      }
      

      /*
      //SQL Command
      $sql = "select * from user_data";
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
      */

    ?>